<div class="d-lg-none">
    <nav class="navbar sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-uppercase fs-bold fs-1 ms-2 mt-2" href="#">{{ __('doctors') }}</a>
            @pagination(['table' => $doctors])
            @endpagination
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon p-4"></span>
            </button>
            <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a href="{{ route('panels.index') }}" class="nav-item nav__btn--title">
                        <h5 class="offcanvas-title fs-1 pt-2" id="offcanvasNavbarLabel">Panel Admin</h5>
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
                            <form class="form-inline my-2 w-50">
                                <input type="text" class="form-control" name="search" value="{{ $search }}">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                        <li>
                            @create_btn([
                                'crud' => 'create',
                                'model' => 'doctors',
                                'route' => 'doctors.create',
                                'color' => 'success',
                                'text' => 'add doctors'
                            ])
                            @endcreate_btn
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </nav>
</div>
