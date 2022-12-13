<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/36040ca96e.js" crossorigin="anonymous"></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <main class="">
        <div class="fluid-container lol">
            <div class="row">
                <div class="col-4 col-lg-2 h-100  ">
                    <div class="row d-flex justify-content-center w-100 ms-1 me-1 pt-5">
                        <a href="{{ route('panels.index') }}">
                            <h1 class="text-center mb-4">PANEL</h1>
                        </a>
                        @can('viewAny', App\Model\Term::class)
                            <a class="btn btn-primary p-2 m-2 fs-2  w-75" href="{{ route('terms.index') }}">
                                {{ __('Terms') }}
                            </a>
                        @endcan
                        @can('viewAny', App\Model\Service::class)
                            <a class="btn btn-primary p-2 m-2 fs-2  w-75" href="{{ route('services.index') }}">
                                {{ __('Services') }}
                            </a>
                        @endcan
                        @can('viewAny', App\Model\Category::class)
                            <a class="btn btn-primary p-2 m-2 fs-2 w-75" href="{{ route('categories.index') }}">
                                {{ __('Categories') }}
                            </a>
                        @endcan
                        @can('viewAny', App\Model\Doctor::class)
                            <a class="btn btn-primary p-2 m-2 fs-2 w-75" href="{{ route('doctors.index') }}">
                                {{ __('Doctors') }}
                            </a>
                        @endcan
                        @can('viewAny', App\Model\User::class)
                            <a class="btn btn-primary p-2 m-2 fs-2 w-75" href="{{ route('users.index') }}">
                                {{ __('Users') }}
                            </a>
                        @endcan
                        @can('viewAny', App\Model\User::class)
                            <a class="btn btn-primary p-2 m-2 fs-2 w-75" href="{{ url('/') }}">
                                {{ __('Back To Home') }}
                            </a>
                        @endcan

                        <a class="btn btn-danger p-2 m-5 fs-2 w-75" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                <div class="col-8 col-lg-10  pe-4">
                    @yield('content')
                </div>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    </main>
</body>

</html>
