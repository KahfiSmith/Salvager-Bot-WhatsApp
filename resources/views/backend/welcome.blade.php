<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>

    @vite(['resources/js/app.js' , 'resources/css/app.css' , 'resources/sass/app.scss'])

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="icon" href="frontend/assets/img/favicon2.png" type="image/png">

     {{-- CDN CSS --}}
     {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

     {{-- css & js --}}
     {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend/assets/js/app.js') }}"> --}}

     <link href="{{ asset('build/manifest.json') }}"/>
     <link href="{{ asset('build/assets/app-6ae68e36.css') }}"/>
     <link href="{{ asset('build/assets/app-8415a669.css') }}"/>
     <link href="{{ asset('build/assets/app-46521879.css') }}"/>
     <link href="{{ asset('build/assets/app-cfd67b01.js') }}"/>

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
                    <div class="card-body p-3 mx-2">
                      <div class="text-start">
                        <h4 class="mt-1 mb-1 pb-1 font-col text-blue">Tentang Kami</h4>
                      </div>
                      <div class="pb-5">
                        <p class="fw-normal fs-6" style="text-align: justify"> Selamat datang di "DEPO MAYAR GRESIK" – toko spesialis dalam penjualan galon air minum dan tabung gas elpiji! Saat Anda melangkah masuk ke dalam toko ini, Anda akan disambut dengan suasana yang bersih, teratur, dan ramah pelanggan. Rak-rak yang teratur dengan galon air minum berjejer rapi di satu sisi toko, sementara tabung gas elpiji yang aman dan terjaga berada di sisi lainnya.</p>
                        <P class="fw-normal fs-6" style="text-align: justify">Toko ini menawarkan berbagai macam pilihan galon air minum untuk memenuhi kebutuhan hidrasi Anda. Mulai dari galon air mineral murni hingga galon air mineral dengan tambahan elektrolit, Anda dapat memilih sesuai dengan preferensi dan gaya hidup Anda.</P>
                      </div>
      
                        <div class="text-end pt-1 mt-lg-4 pb-1">
                         <a style="text-decoration:none" href="{{ route('login') }}" class="fw-semibold fs-4 rounded-2 bg-blue text-white ps-4 pe-4 pt-2 pb-2">Selamat Datang</a>
                        </div>
      
                    </div>
                  </div>
                </div>
              </div
            </div>
          </div>
        </div>
      </section>

</body>

</html>