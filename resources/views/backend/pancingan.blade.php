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

</head>
<body>

        <div class="d-flex flex-row">
          <div class="bg-blues col-auto col-md-2 min-vh-100 d-flex flex-column justify-content-between" style="position: sticky; top: 0; height: 100vh">
                <div class="bg-blues p-2">
                    <a class="d-flex text-decoration-none mt-2 align-items-center text-blue">
                        {{-- <i class="fa-solid fa-grip"></i> --}}
                        <span class="fs-5 fw-medium ms-3 d-none d-sm-inline">DEPO MAYAR JAYA</span>
                    </a>
                    <ul class="nav nav-pills flex-column mt-2">
                        <li class="nav-item text-secondary">
                            <a href="{{ route('dashboard') }}" class="nav-link active">
                                <i class="fa-solid fa-grip text-blue"></i><span class="fs-6 text-blue fw-medium ms-2 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pelanggan.index') }}" class="nav-link">
                                <i class="fa-solid fa-user text-blue"></i><span class="fs-6 text-blue fw-medium ms-2 d-none d-sm-inline">Pelanggan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('riwayat.index') }}" class="nav-link">
                                <i class="fa-solid fa-clock-rotate-left text-blue"></i><span class="fs-6 text-blue fw-medium ms-2 d-none d-sm-inline">Riwayat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-circle-user text-blue"></i><span class="fs-6 text-blue fw-medium ms-2 d-none d-sm-inline">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout" class="nav-link" onclick="return confirm('Apakah anda yakin ingin keluar?')">
                                <i class="fa-solid fa-right-from-bracket text-blue"></i><span class="fs-6 text-blue fw-medium ms-2 d-none d-sm-inline">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

                        <main class="main m-4">
      
              <div class="pagetitle">
                  <h1>Riwayat</h1>
                </div><!-- End Page Title -->
      
            <section class="section dashboard">
              <div class="row">
          
                  <!-- Left side columns -->
          
                    <div class="row">
          
                        
                        <div class="form-group mb-3">
                            <form action="riwayat.pelanggan" method="GET">
                              <div class="input-group w-25">
                                <select class="form-select" name="date_filter">
                                  <option value="">Pilih</option>
                                  <option value="today">Hari Ini</option>
                                  <option value="yesterday">Kemarin</option>
                                  <option value="this_week">Minggu Ini</option>
                                  <option value="this_month">Bulan Ini</option>
                                  <option value="this_year">Tahun Ini</option>
                                </select>
                                <button type="submit" class="btn btn-cetak text-white">Filter</button>
                              </div>
                            </form>
                           </div>
                         
                              <div class="card mt-2">
                                <div class="card-body">
                    
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">No</th>
                                        <th scope="col" class="text-center">Order Id</th>
                                        <th scope="col" class="text-center">Nama</th>
                                        <th scope="col" class="text-center">Jumlah Total Harga</th>
                                        <th scope="col" class="text-center">Metode Pembayaran</th>
                                        <th scope="col">Tanggal Pemesanan</th>
                                        <th scope="col">Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @forelse ($data as $pelanggan)
                                      <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td class="text-center">{{ $pelanggan->id }}</td>
                                        <td class="text-center">{{ $pelanggan->user->name }}</td>
                                        <td class="text-center">{{ formatRupiah($pelanggan->total_amount) }}</td>
                                        <td class="text-center">{{ $pelanggan->payment_method }}</td>
                                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $pelanggan->order_date)->format('d-m-Y H:i:s') }}</td>
                                        <td>
                                          <a href="{{ route('riwayat.show', $pelanggan->id) }}" class="text-white btn btn-sm btn-detail">Detail</a>
                                          <a href="{{ route('riwayat/download.pdf', ['id' => $pelanggan->id]) }}" class="text-white btn btn-sm btn-cetak">Cetak</a>
                                        
                                      </td>
                    
                                      </tr>
                                      @empty
                                      <div class="alert alert-danger mt-4">
                                          Tidak ada data riwayat penjualan
                                      </div> 
                                      @endforelse
                                      
                                    </tbody>
                                  </table>
                    
                                </div>
                              </div>

                </div>
              </div>
            </section>
            </main><!-- End #main -->

        </div>
    
</body>
</html>