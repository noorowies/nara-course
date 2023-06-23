<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>N-Teach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div class="container-fluid">
        <div class="row bg-img">
            <nav class="navbar navbar-expand-lg bg-dark fixed" dir="ltr">
                <div class="container-fluid">
                    <a class="navbar-brand text-warning" href="#">Our Courses</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#OurCoursesMenu" aria-controls="OurCoursesMenu" aria-expanded="false"
                        aria-label="toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="OurCoursesMenu">
                        <ul class="navbar-nav">
                            <li class="nav-item mx-3">
                                <a class="nav-link text-warning" aria-current="page" href="#">About</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-warning"href="#">call us</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-warning"href="#">More courses</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-warning"href="#">address</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-warning"href="#">Feedback</a>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item mx-3">
                                        <a href="{{ url('/home') }}" class="nav-link  text-warning">home</a>
                                    </li>
                                @else
                                    <li class="nav-item mx-3">
                                        <a href="{{ route('login') }}" class="nav-link text-warning">log in</a>
                                    </li>

                                    @if (route::has('register'))
                                        <li class="nav-item mx-3">
                                            <a href="{{ route('register') }}" class="nav-link  text-warning">register</a>
                                        </li>
                                    @endif
                                @endauth
                            @else
                            @endif
                        </ul>
                    </div>
            </nav>

        </div>
    </div>
    <div class="row my-3 justify-content-between mx-1 p-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/pp/grrr.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body justify-content-center">
                <h5 class="card-title">Graphic Design</h5>
                <p class="card-text">
                    <p>For the user interface</p>
                    <p>Marketing </p>
                    <p>visual identity</p> </p>
                <div class="row justify-content-center">
                    <a href="#" class="btn btn-warning">More Info</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/pp/prog.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body justify-content-center">
                <h5 class="card-title">Programing courses</h5>
                <p class="card-text">
                  <p>c++</p>
                  <p>c#</p>
                  <p>JS</p>
                </p>
                <div class="row justify-content-center">
                    <a href="#" class="btn btn-warning">More Info</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/pp/digital.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body justify-content-center">
                <h5 class="card-title">digital education tec</h5>
                <p class="card-text">
                    <p>Deutero Triple</p>
                    <p>Single</p>
                    <p>Digital Banking</p>
                </p>
                <div class="row justify-content-center">
                    <a href="#" class="btn btn-warning">More Info</a>
                </div>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('img/pp/netw.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body justify-content-center">
                <h5 class="card-title">networks computer</h5>
                <p class="card-text">
                    <p>LAN</p>
                    <p>WAN</p>
                    <p>AWS</p>
                </p>
                <div class="row justify-content-center">
                    <a href="#" class="btn btn-warning">More Info</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
