<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'users';
    protected $guarded = [
        'id'
    ];

    public function orders()
    {
        return $this->hasMany(Pesanan::class);
    }

}