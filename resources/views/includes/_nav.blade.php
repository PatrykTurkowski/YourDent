<nav class="main-nav">
    <div class="wrapper nav">
        <div></div>
        <a href="{{ route('welcome') }}" class="nav__logo-box">
            <div class="nav__logo">
                <i class="fa-solid fa-tooth"></i>
                <span class="nav__logo-name">YourDent</span>
            </div>
        </a>
        <!-- NAWIGACJA MOBILNA -->
        <div class="nav__mobile-box">
            <button class="nav__mobile-icon">{{ __('t.menu') }}</button>
            <ul class="nav__mobile-items-box">
                <a href="" class="nav__item-mobile">{{ __('t.offer') }}</a>
                <a href="{{ route('visits.index') }}" class="nav__item-mobile">{{ __('t.make_an_appointment') }}
                </a>
                <a href="" class="nav__item-mobile">{{ __('t.team') }}</a>
                <a href="" class="nav__item-mobile">{{ __('t.faq') }}</a>
                <a href="" class="nav__item-mobile">{{ __('t.contact') }}</a>
            </ul>
        </div>
        <!-- NAWIGACJA DESKTOP -->
        <div class="nav__items-box">
            <a href="" class="nav__item">{{ __('t.offer') }}</a>
            <a href="{{ route('visits.index') }}" class="nav__item">{{ __('t.make_an_appointment') }}</a>
            <a href="" class="nav__item">{{ __('t.team') }}</a>
            <a href="" class="nav__item">{{ __('t.faq') }}</a>
            <a href="" class="nav__item">{{ __('t.contact') }}</a>
        </div>
        <div class="nav__login-box">


            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="nav__login">{{ __('t.login') }}</a>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                        @can('viewAny', App\Model\Term::class)
                            <a class="dropdown-item" href="{{ route('panels.index') }}">
                                {{ __('Admin Panel') }}
                            </a>
                        @endcan
                        @can('update', App\Model\User::class)
                            <a class="dropdown-item" href="{{ route('dashboard') }}">
                                {{ __('dashboard') }}
                            </a>
                        @endcan
                        @can('update', App\Model\User::class)
                            <a class="dropdown-item" href="{{ route('reservations.index', ['user' => Auth::user()->id]) }}">
                                {{ __('Reservation') }}
                            </a>
                        @endcan
                        @can('update', App\Model\User::class)
                            <a class="dropdown-item" href="{{ route('histories.index', ['user' => Auth::user()->id]) }}">
                                {{ __('History') }}
                            </a>
                        @endcan
                        @can('update', App\Model\User::class)
                            <a class="dropdown-item" href="{{ route('users.edit', ['user' => Auth::user()->id]) }}">
                                {{ __('profile') }}
                            </a>
                        @endcan







                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>
        <div class="nav__language-box">
            <button class="nav__language-chosen text-uppercase">{{ App::getlocale() }}</button>
            <div class="nav__language-btn-container">
                <form action="{{ route('locales') }}" method="get">
                    @csrf
                    <input type="hidden" value="pl" name="locale">
                    <button value="submit" class="nav__language-btn nav__language--pl">PL</button>
                </form>
                <form action="{{ route('locales') }}" method="get">
                    @csrf
                    <input type="hidden" value="en" name="locale">
                    <button type="submit" class="nav__language-btn nav__language--eng">EN</button>
                </form>

            </div>
        </div>
        </a>
</nav>
