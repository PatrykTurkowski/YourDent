@extends('layouts.main')
@section('links')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')

    <main class="register">
        <section class="register__container">
            <div class="wrapper">
                <h1 class="register__title">{{ __('t.register') }}</h1>


                <form method="POST" action="{{ route('register') }}" class="register__box-main">
                    @csrf
                    @input([
                        'name' => 'name',
                        'type' => 'text',
                        'required' => 'required',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'surname',
                        'type' => 'text',
                        'required' => 'required',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'phone_number',
                        'type' => 'text',
                        'required' => 'required',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'pesel',
                        'type' => 'text',
                        'required' => 'required maxlength=11',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'date_of_birth',
                        'type' => 'date',
                        'required' => 'required',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'city',
                        'type' => 'text',
                        'required' => 'required',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'street',
                        'type' => 'text',
                        'required' => 'required',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'street_number',
                        'type' => 'text',
                        'required' => 'required',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'apartment_number',
                        'type' => 'text',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'postcode',
                        'type' => 'text',
                        'required' => 'required maxlength=5',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'email',
                        'type' => 'email',
                        'required' => 'required',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'password',
                        'type' => 'password',
                        'required' => 'required',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    @input([
                        'name' => 'password_confirmation',
                        'type' => 'password',
                        'required' => 'required',
                        'class' => 'register__input',
                        'label' => 'register__label'
                    ])
                    @endinput
                    <div class="register__box-checkbox">
                        <input type="checkbox" class="register__input-checkbox" id="rules">
                        <label for="rules">Zapoznałem(-am) się z regulaminem i akceptuję warunki korzystania z
                            serwisu.</label>
                    </div>


                    <button type="submit" class="register__btn">
                        {{ __('Register') }}
                    </button>

                </form>

            </div>
        </section>
    </main>

    @include('includes._footer')
@endsection
