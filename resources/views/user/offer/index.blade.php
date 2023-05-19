@extends('layouts.main')
@section('links')
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/offer.js'])
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')

    <main class="offer-site">
        <div class="wrapper">
            <section class="offer-section">
                <div class="offer-section__img offer-section__img--one" role="img"
                    aria-label="Zdjęcie pisania w dzienniku."></div>
                <div class="offer-section__text-box">
                    <h1 class="offer-section__title">{{ __('offer.diagnostics') }}</h1>
                    <ul class="offer-section__list">
                        <li class="offer-section__text">{{ __('offer.x-ray') }}</li>
                        <li class="offer-section__text">{{ __('offer.computer_microtomography') }}</li>
                        <li class="offer-section__text">{{ __('offer.computer_tomography') }}</li>
                        <li class="offer-section__text">{{ __('offer.medical_consultation') }}</li>
                    </ul>
                </div>
            </section>
            <section class="offer-section">
                <div class="offer-section__img offer-section__img--two" role="img"
                    aria-label="Zdjęcie aparatu ortodontycznego"></div>
                <div class="offer-section__text-box">
                    <h1 class="offer-section__title">{{ __('offer.orthodontics') }}</h1>
                    <ul class="offer-section__list">
                        <li class="offer-section__text">{{ __('offer.traditional_orthodontic_appliances') }}</li>
                        <li class="offer-section__text">{{ __('offer.ceramic_braces') }}</li>
                        <li class="offer-section__text">{{ __('offer.self-ligating_fixed_appliances') }}</li>
                        <li class="offer-section__text">{{ __('offer.overlay_systems') }}</li>
                        <li class="offer-section__text">{{ __('offer.orthodontic_appliances_for_children') }}</li>
                    </ul>
                </div>
            </section>
            <section class="offer-section">
                <div class="offer-section__img offer-section__img--three" role="img"
                    aria-label="Zdjęcie uśmiechniętego dziecka siędzacego na krzesle dentystycznym"></div>
                <div class="offer-section__text-box">
                    <h1 class="offer-section__title">{{ __('offer.pedodontics') }}
                    </h1>
                    <ul class="offer-section__list">
                        <li class="offer-section__text">{{ __('offer.varnishing') }}</li>
                        <li class="offer-section__text">{{ __('offer.fluoridation') }}</li>
                        <li class="offer-section__text">{{ __('offer.light-curing_composite_filling') }}</li>
                        <li class="offer-section__text">{{ __('offer.lapis') }}</li>
                    </ul>
                </div>
            </section>
            <section class="offer-section">
                <div class="offer-section__img offer-section__img--four" role="img"
                    aria-label="Zdjęcie dwóch chirugów wykonujących operacje"></div>
                <div class="offer-section__text-box">
                    <h1 class="offer-section__title">{{ __('offer.dental_surgery') }}</h1>
                    <ul class="offer-section__list">
                        <li class="offer-section__text">{{ __('offer.root_apex_resection') }}</li>
                        <li class="offer-section__text">{{ __('offer.incision/puncture_of_intraoral_abscesses') }}</li>
                        <li class="offer-section__text">{{ __('offer.clinical_crown_lengthening') }}</li>
                        <li class="offer-section__text">{{ __('offer.hemisection') }}</li>
                        <li class="offer-section__text">{{ __('offer.implantology') }}</li>
                    </ul>
                </div>
            </section>
            <section class="offer-section">
                <div class="offer-section__img offer-section__img--five" role="img"
                    aria-label="Zdjęcie zdrowych zębów przegryzających marchew"></div>
                <div class="offer-section__text-box">
                    <h1 class="offer-section__title">{{ __('offer.prosthetics') }}</h1>
                    <ul class="offer-section__list">
                        <li class="offer-section__text">{{ __('offer.prosthetic_crown') }}</li>
                        <li class="offer-section__text">{{ __('offer.skeletal_prosthesis') }}</li>
                        <li class="offer-section__text">{{ __('offer.acrylic_prosthesis') }}</li>
                        <li class="offer-section__text">{{ __('offer.tooth_reconstruction_with_a_crown-root_insert') }}
                        </li>
                    </ul>
                </div>
            </section>
            <section class="offer-section">
                <div class="offer-section__img offer-section__img--six" role="img"
                    aria-label="Zdjęcie lekarzy obslugujących aparature laserową"></div>
                <div class="offer-section__text-box">
                    <h1 class="offer-section__title">{{ __('offer.laser_therapy') }}</h1>
                    <ul class="offer-section__list">
                        <li class="offer-section__text">{{ __('offer.exposure_of_implants') }}</li>
                        <li class="offer-section__text">{{ __('offer.bleaching') }}</li>
                        <li class="offer-section__text">{{ __('offer.notches') }}</li>
                        <li class="offer-section__text">{{ __('offer.decontamination_of_the_canal_system') }}</li>
                    </ul>
                </div>
            </section>
        </div>
    </main>

    @include('includes._footer')
    <style>
        .offer-section__img--one {
            background-image: url({{ asset('storage/diagnosis_640.jpg') }});
        }

        @media(min-width: 700px) {
            .offer-section__img--one {
                background-image: url({{ asset('storage/diagnosis_1920.jpg') }});
            }
        }

        .offer-section__img--two {
            background-image: url({{ asset('storage/ortodoncja_640.jpg') }});
        }

        @media(min-width: 700px) {
            .offer-section__img--two {
                background-image: url({{ asset('storage/ortodoncja_1920.jpg') }});
            }
        }

        .offer-section__img--three {
            background-image: url({{ asset('storage/nate-johnston-640-unsplash.jpg') }});
        }

        @media(min-width: 700px) {
            .offer-section__img--three {
                background-image: url({{ asset('storage/nate-johnston-1920-unsplash.jpg') }});
            }
        }

        .offer-section__img--four {
            background-image: url({{ asset('storage/chirurgia_640.jpg') }});
        }

        @media(min-width: 700px) {
            .offer-section__img--four {
                background-image: url({{ asset('storage/chirurgia_1920.jpg') }});
            }
        }

        .offer-section__img--five {
            background-image: url({{ asset('storage/protetyka_640.jpg') }});
        }

        @media(min-width: 700px) {
            .offer-section__img--five {
                background-image: url({{ asset('storage/protetyka_1920.jpg') }});
            }
        }

        .offer-section__img--six {
            background-image: url({{ asset('storage/laseroterapia_640.jpg') }});
        }

        @media(min-width: 700px) {
            .offer-section__img--six {
                background-image: url({{ asset('storage/laseroterapia_1920.jpg') }});
            }
        }
    </style>
@endsection
