<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    {{-- Vite --}}
    {{-- @vite(['resources/js/app.js' , 'resources/css/app.css' , 'resources/sass/app.scss']) --}}

    <link rel="icon" href="frontend/assets/img/favicon2.png" type="image/png">

          {{-- CDN JS--}}
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

          {{-- CDN CSS --}}
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
          {{-- css & js --}}
          <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.css') }}">
          <link rel="stylesheet" href="{{ asset('frontend/assets/sass/app.scss') }}">
          <script src="{{ asset('frontend/assets/js/app.js') }}"></script>

</head>

<body style="background-color: #eee;">

    <section class="scrollbar-hidden-x h-100 gradient-form mt-5" style="background-color: #eee;">
        <div class="container py-5 h-100  ">
          <div class="row d-flex justify-content-center align-items-center h-100 m-auto">
            <div class="col-xl-10">
              <div class="card rounded-1 text-black">
                <div class="row g-0">

                  <div class="rounded-start-1 col-lg-6 align-items-center bg-blue">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4 text-center mt-4">
                        <h4 class="mb-2 mt-5">DEPO MAYAR JAYA GRESIK</h4>
                        <p class="fs-5 mb-3">Kualitas Tinggi, Layanan Cepat</p>
                        <img src="frontend/assets/img/galon.png"
                          style="width: 200px;" alt="logo" class="mb-5" class="img-center">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">
                      <div class="text-center">
                        <h3 class="mt-1 mb-5 pb-1 font-col text-blue">Login</h3>
                      </div>

                      @if ($message = Session::get('success'))
                      <div class="alert alert-success" role="alert">
                        {{ $message }}
                      </div>
                      @endif
                      
                      <form action="" method="POST">
                        @csrf                 
                        <div class="form-outline mb-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="username" name="username" id="username" class="form-control @error('username') is-invalid @enderror"
                            required autocomplete="username" oninvalid="this.setCustomValidity('Harap lengkapi username anda')" 
                            oninput="this.setCustomValidity('')"
                            placeholder="Masukkan Username Anda" value="{{ old('Username')}}"/>
                            @error('username')
                            <div class="invalid-feedback">
                              {{ 'Username yang anda masukkan salah' }}
                            </div> @enderror
                        </div>
      
                        <div class="form-outline mb-5">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" 
                            required autocomplete="password" oninvalid="this.setCustomValidity('Harap lengkapi password anda')" 
                            oninput="this.setCustomValidity('')"
                            placeholder="Masukkan password Anda"/>
                            @error('password')
                            <div class="invalid-feedback">
                              {{ 'Password yang anda masukkan salah' }}
                            </div> @enderror
                        </div>
      
                        <div class="text-center pt-1 mb-3 pb-1">
                          <button class="btn btn-blue text-white form-control mb-3 fw-semibold fs-4" type="submit">Login</button>
                        </div>
      
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>

</html>