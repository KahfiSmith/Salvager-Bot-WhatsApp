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
                    <a href="{{ route('riwayat.index') }}" class="sidebar-link">
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
            <div class="pagetitle"><h1>Profil</h1>
            </div>
              <div class="col-xxl-8 col-md-6">
                <div class="card">
                  <div class="card-body">
                    {{-- <h6 class="card-title">Profile lengkap</h6> --}}

                                @foreach($data as $item)
                                    <p>{{ $item->nama_kolom }}</p>
                                @endforeach 
              
                                <div class="row mb-4">
                                  <label for="name" class="col-md-4 col-lg-3 col-form-label fs-5 fw-semibold text-blue">Nama Toko</label>
                                  <div class="col-md-8 col-lg-9">
                                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror fs-5 text-blue" readonly id="name" placeholder="Masukkan name" required oninvalid="this.setCustomValidity('Harap lengkapi name')" 
                                    oninput="this.setCustomValidity('')" value="{{ $item->name }}">
                                  </div>
                                </div>

                                <div class="row mb-4">
                                  <label for="name" class="col-md-4 col-lg-3 col-form-label fs-5 fw-semibold text-blue">Username</label>
                                  <div class="col-md-8 col-lg-9">
                                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror fs-5 text-blue" readonly id="name" placeholder="Masukkan name" required oninvalid="this.setCustomValidity('Harap lengkapi name')" 
                                    oninput="this.setCustomValidity('')" value="{{ $item->username }}">
                                  </div>
                                </div>

                                <div class="row mb-4">
                                  <label for="name" class="col-md-4 col-lg-3 col-form-label fs-5 fw-semibold text-blue">Nomer Telepon</label>
                                  <div class="col-md-8 col-lg-9">
                                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror fs-5 text-blue" readonly id="name" placeholder="Masukkan name" required oninvalid="this.setCustomValidity('Harap lengkapi name')" 
                                    oninput="this.setCustomValidity('')" value="{{ $item->nomer_telepon }}">
                                  </div>
                                </div>

                                <div class="row mb-4">
                                  <label for="name" class="col-md-4 col-lg-3 col-form-label fs-5 fw-semibold text-blue">Alamat</label>
                                  <div class="col-md-8 col-lg-9">
                                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror fs-5 text-blue" readonly id="name" placeholder="Masukkan name" required oninvalid="this.setCustomValidity('Harap lengkapi name')" 
                                    oninput="this.setCustomValidity('')" value="{{ $item->alamat }}">
                                  </div>
                                </div>
              
                              
                  </div>
                </div>
              </div>
         
              
            </div>

  </div>
