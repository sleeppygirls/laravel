<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}} - @yield('judul')</title>
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("ass/main.css")}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md warna ps-3 pe-3">
            <div class="container">
              <img class="logo" src="{{asset("ass/images/logo2.png")}}" alt="logo">
              <a class="navbar-brand" href="/myhome">PUTRI</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                MENU
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive" >
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/myhome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/myabout">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mycontact">Contact Me</a>
                    </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <div class="container-fluid pt-2 pb-2" style="margin: 0;margin-top: -10px; background-color: #ffe7f8;">
        <div class="footer" style="text-align: center; font-weight: 700;">COPYRIGHT &copy INFORMATIKA 2-2023</div>
    </div>
</body>
</html>