<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    {{-- CDN JS--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- Vite --}}
    @vite(['resources/js/app.js' , 'resources/sass/app.scss' , 'resources/css/app.css'])

    {{-- fontawesome --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">

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

<body>

  <div class="wrapper">
    <aside id="sidebar" style="position: sticky; top: 0; max-height: 100vh">
        <div class="h-100">
            <div class="sidebar-logo">
                <a href="#">Depo Mayar Jaya</a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item m-2">
                    <a href="{{ route('dashboard') }}" class="sidebar-link">
                        <i class="fa-solid fa-grip pe-2"></i>
                            Dashboard
                    </a>
                </li>
                <li class="sidebar-item m-2">
                    <a href="{{ route('pelanggan.index') }}" class="sidebar-link">
                        <i class="fa-solid fa-user pe-2"></i>
                            Pelanggan
                    </a>
                </li>
                <li class="sidebar-item m-2">
                    <a href="{{ route('riwayat.index') }}" class="sidebar-link active">
                        <i class="fa-solid fa-clock-rotate-left pe-2"></i>
                            Riwayat
                    </a>
                </li>
                <li class="sidebar-item m-2">
                    <a href="{{ route('profile.index') }}" class="sidebar-link">
                        <i class="fa-solid fa-circle-user pe-2"></i>
                            Profil
                    </a>
                </li>
                <li class="sidebar-item m-2">
                    <a href="{{ route('logout') }}" class="sidebar-link" onclick="return confirm('Apakah anda yakin ingin keluar?')">
                        <i class="fa-solid fa-right-from-bracket pe-2"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <div class="main">
        <div class="navbar navbar-expand px-3 border-bottom">
            <button class="btn" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="ms-4 mt-2 me-4">
            <div class="pagetitle">
                <h1>Daftar Detail Riwayat Penjualan</h1>
            </div><!-- End Page Title -->
         
              <div class="card mt-2">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col" class="text-center">Order Id</th>
                          <th scope="col" class="text-center">Nama Produk</th>
                          <th scope="col" class="text-center">Jumlah</th>
                          <th scope="col" class="text-center">Harga</th>
                          <th scope="col" class="text-center">Metode Pembayaran</th>
                          <th scope="col" class="text-center">Produk Point</th>
                          <th scope="col">Tanggal Pemesanan</th>
      
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($data as $pelanggan)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td class="text-center">{{ $pelanggan->order_id }}</td>
                          <td class="text-center">{{ $pelanggan->name }}</td>
                          <td class="text-center">{{ $pelanggan->quantity }}</td>
                          <td class="text-center">{{ formatRupiah($pelanggan->subtotal) }}</td>
                          <td class="text-center">{{ $pelanggan->payment_method }}</td>
                          <td class="text-center">{{ $pelanggan->product_points }}</td>
                          <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pelanggan->order_date)->format('d-m-Y H:i:s') }}</td>
      
                        </tr>
                        @empty
                        <div class="alert alert-danger mt-4">
                            Tidak ada data detail riwayat penjualan
                        </div> 
                        @endforelse
                        
                      </tbody>
                    </table>
                  </div>
    
                </div>
              </div>
            </div>

  </div>

</body>
</html>