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
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Depo Mayar Jaya</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item m-2">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-grip pe-2"></i>
                                Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item m-2">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-user pe-2"></i>
                                Pelanggan
                        </a>
                    </li>
                    <li class="sidebar-item m-2">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-clock-rotate-left pe-2"></i>
                                Riwayat
                        </a>
                    </li>
                    <li class="sidebar-item m-2">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-circle-user pe-2"></i>
                                Profil
                        </a>
                    </li>
                    <li class="sidebar-item m-2">
                        <a href="#" class="sidebar-link" onclick="return confirm('Apakah anda yakin ingin keluar?')">
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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"                          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"    
    crossorigin="anonymous">
    </script>
</body>
</html>