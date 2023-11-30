<div class="d-flex flex-row">
    <div class="bg-blues col-auto col-md-2 min-vh-100 d-flex flex-column justify-content-between" style="position: sticky; top: 0; max-height: 100vh">
          <div class="bg-blues p-2">
              <a class="d-flex text-decoration-none mt-2 align-items-center text-white">
                  {{-- <i class="fa-solid fa-grip"></i> --}}
                  <span class="fs-5 fw-medium ms-3 d-none d-sm-inline">DEPO MAYAR JAYA</span>
              </a>
              <ul class="nav nav-pills flex-column mt-2">
                  <li class="nav-item text-secondary">
                      <a href="{{ route('dashboard') }}" class="nav-link active">
                          <i class="fa-solid fa-grip text-white"></i><span class="fs-6 text-white fw-medium ms-2 d-none d-sm-inline">Dashboard</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('pelanggan.index') }}" class="nav-link">
                          <i class="fa-solid fa-user text-white"></i><span class="fs-6 text-white fw-medium ms-2 d-none d-sm-inline">Pelanggan</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('riwayat.index') }}" class="nav-link">
                          <i class="fa-solid fa-clock-rotate-left text-white"></i><span class="fs-6 text-white fw-medium ms-2 d-none d-sm-inline">Riwayat</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('profile.index') }}" class="nav-link">
                          <i class="fa-solid fa-circle-user text-white"></i><span class="fs-6 text-white fw-medium ms-2 d-none d-sm-inline">Profil</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('logout') }}" class="nav-link" onclick="return confirm('Apakah anda yakin ingin keluar?')">
                          <i class="fa-solid fa-right-from-bracket text-white"></i><span class="fs-6 text-white fw-medium ms-2 d-none d-sm-inline">Logout</span>
                      </a>
                  </li>
              </ul>
          </div>
      </div>

        <main class="main">

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
                      {{-- {!! $chart->container() !!} --}}

                      <div id="chart"></div>
                    </div>
                  </div>
              </div>

          </div>
        </div>
      </section>
      </main><!-- End #main -->

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js" integrity="sha512-HctQcT5hnI/elQck4950pvd50RuDnjCSGSoHI8CNyQIYVxsUoyJ+gSQIOrll4oM/Z7Kfi7WCLMIbJbiwYHFCpA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.css" integrity="sha512-nnNXPeQKvNOEUd+TrFbofWwHT0ezcZiFU5E/Lv2+JlZCQwQ/ACM33FxPoQ6ZEFNnERrTho8lF0MCEH9DBZ/wWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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