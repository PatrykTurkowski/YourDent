@extends('layouts.main')
@section('links')
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/profile.js'])
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')
    <main class="profile">


        <div class="wrapper">


            <div class="profile__box">
                <div class="profile__bg"></div>

                <div class="profile__container">
                    <div class="profile__menu">
                        <ul class="profile__buttons">
                            <button class="profile__my-profile-btn" type="button"><i
                                    class="fa-regular fa-user profile__icon"></i>{{ __('profile.my_profile') }}</button>
                            <button class="profile__edit-btn" type="button"><i
                                    class="fa-regular fa-share-from-square profile__icon"></i>{{ __('profile.change_data') }}</button>
                            <button class="profile__history-btn" type="button"><i
                                    class="fa-solid fa-clock-rotate-left profile__icon"></i>{{ __('profile.visit_history') }}</button>
                            <button class="profile__change-pass-btn" type="btn"><i
                                    class="fa-solid fa-unlock profile__icon"></i>{{ __('profile.change_password') }}</button>
                            <button class="profile__logout-btn" type="button"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i
                                    class="fa-solid fa-arrow-right-from-bracket profile__icon"></i>{{ __('profile.logout') }}</button>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>



                        </ul>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show fixed-bottom" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-dismissible fade show fixed-bottom" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="profile__my-profile-box">

                        <div class="profile__user-box">
                            <div class="profile__img"></div>
                            <p class="profile__name">{{ $user->name }}</p>
                        </div>
                        <div class="profile__data-box">
                            <div class="profile__data profile__data--pesel">
                                <h4 class="profile__data-title">{{ __('profile.pesel') }}:</h4>
                                <p class="profile__data-text">{{ $user->pesel }}</p>
                            </div>
                            <div class="profile__data profile__data--birth">
                                <h4 class="profile__data-title">{{ __('profile.date_of_birth') }}:</h4>
                                <p class="profile__data-text">{{ $user->date_of_birth }}</p>
                            </div>
                            <div class="profile__data profile__data--phone">
                                <h4 class="profile__data-title">{{ __('profile.number_phone') }}:</h4>
                                <p class="profile__data-text">{{ $user->phone_number }}</p>
                            </div>
                            <div class="profile__data profile__data--place">
                                <h4 class="profile__data-title">{{ __('profile.domicile') }}:</h4>
                                <p class="profile__data-text">{{ $user->city }}</p>
                            </div>
                            <div class="profile__data profile__data--street">
                                <h4 class="profile__data-title">{{ __('profile.street') }}:</h4>
                                <p class="profile__data-text">{{ $user->street }}</p>
                            </div>
                            <div class="profile__data profile__data--postal-code">
                                <h4 class="profile__data-title">{{ __('profile.post_code') }}:</h4>
                                <p class="profile__data-text">{{ $user->postcode }}</p>
                            </div>
                            <div class="profile__data profile__data--email">
                                <h4 class="profile__data-title">{{ __('profile.email') }}:</h4>
                                <p class="profile__data-text">{{ $user->email }}</p>
                            </div>
                        </div>
                    </div>


                    <form class="profile__change-data-box" method="POST" action="{{ route('users.update', $user->id) }}">
                        @csrf
                        @method('put')
                        <div class="profile__change profile__change--fname">
                            <label for="changeFName" class="profile__change-label">{{ __('profile.change_name') }}:</label>
                            <input type="text" name="name" value="{{ $user->name }}"
                                autocomplete="{{ $user->name }}" id="changeName" class="profile__change-input" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile__change profile__change--sname">
                            <label for="changeSName"
                                class="profile__change-label">{{ __('profile.change_surname') }}:</label>
                            <input type="text" name="surname" value="{{ $user->surname }}"
                                autocomplete="{{ $user->surname }}" id="changeSName" class="profile__change-input"
                                required>
                            @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile__change profile__change--pesel">
                            <label for="changeName" class="profile__change-label">{{ __('profile.pesel') }}:</label>
                            <input type="number" name="pesel" value="{{ $user->pesel }}"
                                autocomplete="{{ $user->pesel }}" id="changePesel" class="profile__change-input" required>
                            @error('pesel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile__change profile__change--pesel">
                            <label for="changeName"
                                class="profile__change-label">{{ __('profile.change_date_of_birth') }}:</label>
                            <input type="data" name="date_of_birth" value="{{ $user->date_of_birth }}"
                                autocomplete="{{ $user->date_of_birth }}" id="changePesel" class="profile__change-input"
                                required>
                            @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile__change profile__change--phone">
                            <label for="changeName"
                                class="profile__change-label">{{ __('profile.change_number_phone') }}:</label>
                            <input type="text" name="phone_number" value="{{ $user->phone_number }}"
                                autocomplete="{{ $user->phone_number }}" id="phone" class="profile__change-input"
                                required>
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile__change profile__change--place">
                            <label for="changeName"
                                class="profile__change-label">{{ __('profile.change_domicile') }}:</label>
                            <input type="text" name="city" value="{{ $user->city }}"
                                autocomplete="{{ $user->city }}" id="changePlace" class="profile__change-input"
                                required>
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile__change profile__change--street">
                            <label for="changeName"
                                class="profile__change-label">{{ __('profile.change_street') }}:</label>
                            <input type="text" name="street" value="{{ $user->street }}"
                                autocomplete="{{ $user->street }}" id="changeStreet" class="profile__change-input"
                                required>
                            @error('street')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile__change profile__change--street">
                            <label for="changeName"
                                class="profile__change-label">{{ __('profile.change_number_street') }}:</label>
                            <input type="text" name="street_number" value="{{ $user->street_number }}"
                                autocomplete="{{ $user->street_number }}" id="changeStreet"
                                class="profile__change-input" required>
                            @error('street_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile__change profile__change--postalCode">
                            <label for="changeName" class="profile__change-label">{{ __('profile.post_code') }}:</label>
                            <input type="text" name="postcode" value="{{ $user->postcode }}"
                                autocomplete="{{ $user->postcode }}" id="changePostalCode" class="profile__change-input"
                                required>
                            @error('postcode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile__change profile__change--email">
                            <label for="changeName" class="profile__change-label">{{ __('profile.email') }}:</label>
                            <input type="email" name="email" value="{{ $user->email }}"
                                autocomplete="{{ $user->email }}" id="changeEmail" class="profile__change-input"
                                required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="profile__change-btn">{{ __('profile.save') }}</button>
                    </form>
                    <div class="profile__visit-history-box">
                        <table class="profile__visit-table">

                            <thead class="profile__visit-table-head">
                                <tr>
                                    <td class="profile__visit-table-heading">{{ __('profile.term') }}</td>
                                    <td class="profile__visit-table-heading">{{ __('profile.doctor') }}</td>
                                    <td class="profile__visit-table-heading">{{ __('profile.execution') }}</td>

                                </tr>
                            </thead>
                            <tbody class="profile__visit-table-body">
                                @foreach ($terms as $term)
                                    <tr class="profile__visit-table-row">
                                        <td class="profile__visit-table-element">{{ $term->date_visit }}</td>
                                        <td class="profile__visit-table-element">{{ $term->doctors->name }}</td>
                                        <td class="profile__visit-table-element">
                                            {{ $term->is_done ? __('profile.done') : __('profile.not_done') }}</td>
                                        <td>
                                            <a href="{{ route('reservations.show', ['reservation' => $term->id]) }}"
                                                class="btn btn-warning">{{ __('profile.details') }}</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                    <form class="profile__reset-box" action="/changePassword" method="POST">
                        @csrf

                        <div class="profile__reset-input-box">
                            <label for="oldPassword"
                                class="profile__reset-label">{{ __('profile.enter_the_old_password') }}:</label>
                            <input type="password" name="old_password" id="oldPassword" class="profile__reset-input">
                            @error('old_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile__reset-input-box">
                            <label for="changePassword"
                                class="profile__reset-label">{{ __('profile.enter_the_new_password') }}:</label>
                            <input type="password" name="new_password" id="changePassword" class="profile__reset-input">
                            @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="profile__reset-input-box">
                            <label for="changePasswordRepeat"
                                class="profile__reset-label">{{ __('profile.repeat_password') }}:</label>
                            <input type="password" name="new_password_confirmation" id="changePasswordRepeat"
                                class="profile__reset-input">
                            @error('new_password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <p class="profile__reset-alert profile__reset-alert-corect">
                            {{ __('profile.password_changed_successfully') }}</p>
                        <button type="submit" class="profile__reset-btn">{{ __('profile.save') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('includes._footer')
@endsection
