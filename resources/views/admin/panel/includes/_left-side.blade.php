<div class="col-lg-2 left-bar">
    <div class="row">

        <div class="row d-flex flex-column left-bar w-100 ms-1 me-1 pt-5">
            <a class="nav-link" href="{{ route('panels.index') }}">
                <h1 class="text-center mb-4 nav__btn--title">PANEL</h1>
            </a>
            @can('viewAny', App\Model\Term::class)
                <a class="nav__btn p-2 m-2 fs-3  " href="{{ route('terms.index') }}">
                    {{ __('Terms') }}
                </a>
            @endcan
            @can('viewAny', App\Model\Service::class)
                <a class="nav__btn p-2 m-2 fs-3  " href="{{ route('services.index') }}">
                    {{ __('Services') }}
                </a>
            @endcan
            @can('viewAny', App\Model\Category::class)
                <a class="nav__btn p-2 m-2 fs-3 " href="{{ route('categories.index') }}">
                    {{ __('Categories') }}
                </a>
            @endcan
            @can('viewAny', App\Model\Doctor::class)
                <a class="nav__btn p-2 m-2 fs-3 " href="{{ route('doctors.index') }}">
                    {{ __('Doctors') }}
                </a>
            @endcan
            @can('viewAny', App\Model\User::class)
                <a class="nav__btn p-2 m-2 fs-3 " href="{{ route('users.index') }}">
                    {{ __('Users') }}
                </a>
            @endcan
            @can('viewAny', App\Model\User::class)
                <a class="nav__btn p-2 m-2 fs-3 " href="{{ url('/') }}">
                    {{ __('Home') }}
                </a>
            @endcan

            <a class="nav__btn--logout mt-auto pb-5 fs-2 " href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>

    </div>
</div>
