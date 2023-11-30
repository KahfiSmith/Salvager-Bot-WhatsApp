<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
     
      {{-- Vite --}}
      @vite(['resources/js/app.js' , 'resources/sass/app.scss' , 'resources/css/app.css'])
  
      {{-- fontawesome --}}
      <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">

      <link rel="icon" href="frontend/assets/img/favicon2.png" type="image/png">

      {{-- CDN JS--}}
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      {{-- CDN CSS --}}
      {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

      {{-- css & js --}}
      {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.css') }}">
      <link rel="stylesheet" href="{{ asset('frontend/assets/sass/app.scss') }}">
      <script src="{{ asset('frontend/assets/js/app.js') }}"></script> --}}

        <link href="{{ asset('build/manifest.json') }}"/>
        <link href="{{ asset('build/assets/app-6ae68e36.css') }}"/>
        <link href="{{ asset('build/assets/app-8415a669.css') }}"/>
        <link href="{{ asset('build/assets/app-46521879.css') }}"/>
        <script src="{{ asset('build/assets/app-cfd67b01.js') }}"></script>
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
                    <a href="{{ route('dashboard') }}" class="sidebar-link active">
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
                    <a href="{{ route('riwayat.index') }}"" class="sidebar-link">
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
          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
          @endif
  
          <div class="pagetitle">
              <h1>Pendapatan</h1>
          </div><!-- End Page Title -->
  
        <section class="section dashboard">
          <div class="row">
      
              <!-- Left side columns -->
      
                <div class="row">
      
                  <!-- Sales Card -->
                  <div class="col-xxl-6 col-md-6">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title">Pendapatan Perhari</h5>
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class="fa-solid fa-money-check-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>@formatSum($data1)</h6>
                            <span>Jumlah Pendapatan Perhari</span>
                            <br><br>
      
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Sales Card -->
  
                  <!-- Sales Card -->
                  <div class="col-xxl-6 col-md-6">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title">Pendapatan Perbulan</h5>
      
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class="fa-solid fa-money-check-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>@formatSum($data2)</h6>
                            <span>Jumlah Pendapatan Perbulan</span>
                            <br><br>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Sales Card -->
  
                  <!-- Sales Card -->
                  <div class="col-xxl-6 col-md-6">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title">Pendapatan Pertahun</h5>
      
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class="fa-solid fa-money-check-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>@formatSum($data3)</h6>
                            <span>Jumlah Pendapatan Pertahun</span>
                            <br><br>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Sales Card -->
  
                  <!-- Sales Card -->
                  <div class="col-xxl-6 col-md-6">
                    <div class="card info-card sales-card">
                      <div class="card-body">
                        <h5 class="card-title">Pendapatan Sepanjang Waktu</h5>
      
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class="fa-solid fa-money-check-dollar"></i>
                          </div>
                          <div class="ps-3">
                            <h6>@formatSum($data4)</h6>
                            <span>Jumlah Pendapatan Sepanjang Waktu</span>
                            <br><br>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- End Sales Card -->
                  
                  <div class="col-md-12 mx-auto mt-2">
  
                    <div class="pagetitle">
                      <h1>Daftar Riwayat Penjualan Hari Ini</h1>
                    </div><!-- End Page Title -->
          
                    <div class="card mt-2">
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col" class="text-center">Jumlah Total Harga</th>
                                <th scope="col" class="text-center">Metode Pembayaran</th>
                                <th scope="col">Tanggal Pemesanan</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php
                                $no = 1;
                              @endphp
                              @forelse ($data as $pelanggan)
                              <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $pelanggan->name }}</td>
                                <td class="text-center">{{ formatRupiah($pelanggan->total_amount) }}</td>
                                <td class="text-center">{{ $pelanggan->payment_method }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pelanggan->order_date)->format('d-m-Y H:i:s') }}</td>
            
                              </tr>
                              @empty
                              <div class="alert alert-danger mt-4">
                                  Tidak ada data penjualan hari ini
                              </div> 
                              @endforelse
                              
                            </tbody>
                          </table>
                        </div>
          
                      </div>
                    </div>
  
                    <div class="pagetitle">
                      <h1>Grafik Pendapatan Bulanan</h1>
                    </div><!-- End Page Title -->
  
                    <div class="card mt-2">
                      <div class="card-body p-2">
  
                        <div id="chart"></div>
                      </div>
                    </div>
                </div>
  
            </div>
          </div>
        </section>
        </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js" integrity="sha512-HctQcT5hnI/elQck4950pvd50RuDnjCSGSoHI8CNyQIYVxsUoyJ+gSQIOrll4oM/Z7Kfi7WCLMIbJbiwYHFCpA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.css" integrity="sha512-nnNXPeQKvNOEUd+TrFbofWwHT0ezcZiFU5E/Lv2+JlZCQwQ/ACM33FxPoQ6ZEFNnERrTho8lF0MCEH9DBZ/wWw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

  <script>  
  var options = {
    series: [{
      name: "Total Pendapatan",
      data: @json($dataTotalPendapatan)
  }],
    chart: {
    height: 300,
    type: 'line',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'straight'
  },
  grid: {
    row: {
      colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.5
    },
  },
  xaxis: {
    categories: @json($dataBulan),
  },
  yaxis: {
    labels: {
      formatter: function (value) {
        return value.toLocaleString("id-ID", {
          style:"currency", 
          currency:"IDR"
        });
      }
    },
  },
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
</script>
    
</body>

</html>