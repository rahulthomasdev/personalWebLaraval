<html>

<head>
    @vite(['public/css/styles.scss'])
    <title>{{$title}}</title>
</head>

<body>
    <header>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </header>

    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <div class="my-3 my-lg-2"><a class="navbar-brand" href="/"><img src='/logo.jpg' class="img-fluid" width="50" /></a></div>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'home'  ? 'active' :''}}" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'about' ? 'active':''}}" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Route::currentRouteName() == 'contact' ? 'active':''}}" href="{{route('contact')}}" tabindex="-1" aria-disabled="true">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="__content h-100">
            @yield('content')
        </div>
    </main>

    <div class="fixed-bottom ">
        <footer class="py-2 my-2 mx-2 __footer">
            <!-- <hr class="mx-3" /> -->
            <div class="col-md-4 d-flex align-items-center justify-content-between w-100 px-5">
                <span class="text-muted">© 2021 Company, Inc</span>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex align-items-center">
                    <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-twitter-x"></i></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook"></i></a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>