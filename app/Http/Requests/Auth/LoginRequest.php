<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    public function messages(): array
{
    return [
        'username.required' => 'Harap lengkapi username anda',
        'password.required' => 'Harap lengkapi kata sandi anda',
    ];
}

    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        $user = User::where('username', $this->username)->first();

        if (empty($user)) {
            throw ValidationException::withMessages([
                'username' => trans('auth.failed'),
            ]);

        } else {
            $check_password = Hash::check($this->password, $user->password);

            if (!$check_password) {
                throw ValidationException::withMessages([
                    'password' => trans('auth.failed')
                ]);

            } else {
                if (! Auth::attempt($this->only('username', 'password'), $this->boolean('remember'))) {
                    RateLimiter::hit($this->throttleKey());
        
                    throw ValidationException::withMessages([
                        'username' => trans('auth.failed'),
                        'password' => trans('auth.failed'),
                    ]);
            }

            RateLimiter::clear($this->throttleKey());
        }
            }
    }

    public function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'username' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->input('username')).'|'.$this->ip());
    }

}
