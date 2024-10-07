<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap --}}
    <!-- Tambahkan Bootstrap CSS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"  />
    
    {{-- panggil css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>PPSBK</title>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light py-2 shadow">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('images/navbar.png') }}" alt="" style="height: 50px" class="me-2">
                <span style="font-size: 70%">PONPES <br>SYEKH BURHANUDDIN</span><hr>
            </a>
            {{-- tampilan android --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="/home" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link"><i class="fas fa-user"></i> Profil</a></li>
                    <li class="nav-item"><a href="/news" class="nav-link"><i class="fas fa-book"></i> Sejarah</a>
                    </li>
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-file-alt"></i> Pendaftaran</a>
                      
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Wustho</a></li>
                          <li><a class="dropdown-item" href="#">Ulya</a></li>
                        </ul>
                      </div>
                </ul>
                <br>
            </div>
        </div>
    </nav>
    {{-- navbar end --}}

    {{-- header --}}
    {{-- header end --}}

    {{-- content --}}
    {{-- content end --}}

    {{-- footer --}}
    {{-- footer end --}}

    <!-- Tambahkan Bootstrap JavaScript dan Popper dari CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tambahkan Icon Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>
