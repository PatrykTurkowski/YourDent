<div class="d-lg-none">
    <nav class="navbar sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase fs-bold fs-1 ms-2 mt-2" href="#">{{ __('terms') }}</a>
            @pagination(['table' => $terms])
            @endpagination

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon p-4"></span>
            </button>
            <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a href="{{ route('panels.index') }}" class="nav-item nav__btn--title">
                        <h5 class="fs-1 pt-2" id="offcanvasNavbarLabel">
                            Panel Admin</h5>
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            @can('viewAny', App\Model\Term::class)
                                <a class="nav-link" href="{{ route('terms.index') }}">
                                    {{ __('Terms') }}
                                </a>
                            @endcan
                        </li>
                        <li class="nav-item">
                            @can('viewAny', App\Model\Service::class)
                                <a class="nav-link" href="{{ route('services.index') }}">
                                    {{ __('Services') }}
                                </a>
                            @endcan
                        </li>
                        <li class="nav-item">
                            @can('viewAny', App\Model\Category::class)
                                <a class="nav-link" href="{{ route('categories.index') }}">
                                    {{ __('Categories') }}
                                </a>
                            @endcan
                        </li>
                        <li class="nav-item">
                            @can('viewAny', App\Model\Doctor::class)
                                <a class="nav-link" href="{{ route('doctors.index') }}">
                                    {{ __('Doctors') }}
                                </a>
                            @endcan
                        </li>
                        <li class="nav-item">
                            @can('viewAny', App\Model\User::class)
                                <a class="nav-link" href="{{ route('users.index') }}">
                                    {{ __('Users') }}
                                </a>
                            @endcan
                        </li>
                        <li class="nav-item">
                            @can('viewAny', App\Model\User::class)
                                <a class="nav-link" href="{{ url('/') }}">
                                    {{ __('Back To Home') }}
                                </a>
                            @endcan
                        </li>
                        <li class="nav-item">
                            <a class="nav__btn--logout" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li>
                            <form class="d-flex col-sm-4 flex-column">

                                <input type="date" class="form-control" name="start_day"
                                    value="{{ $start_day }}">
                                <input type="date" class="form-control" name="end_day" value="{{ $end_day }}">
                                <input type="time" class="form-control" name="start_time"
                                    value="{{ $start_time }}">
                                <input type="time" class="form-control" name="end_time" value="{{ $end_time }}">
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button class="btn btn-primary">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li>
                            <div class="m">
                                @create_btn([
                                    'crud' => 'create',
                                    'model' => 'TermsGenerator',
                                    'route' => 'termsGenerators.create',
                                    'color' => 'success',
                                    'text' => 'add terms'
                                ])
                                @endcreate_btn
                                @create_btn([
                                    'crud' => 'create',
                                    'model' => 'Term',
                                    'route' => 'terms.create',
                                    'color' => 'success',
                                    'text' => 'add term'
                                ])
                                @endcreate_btn
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
</div>
