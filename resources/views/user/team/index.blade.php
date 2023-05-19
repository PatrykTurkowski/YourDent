@extends('layouts.main')
@section('links')
    @include('includes._links')
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/team.js'])
@endsection
@section('content')
    @include('includes._nav')
    <main class="team">
        <div class="wrapper">
            <section class="team-header__box">
                <div class="team-header__img" role="img" aria-label="Zdjęcie lekarza w laboratorium"></div>
                <div class="team-header__shadow"></div>
                <div class="team-header__text-box">
                    <h1 class="team-header__title">{{ __('team.title') }}</h1>
                    <p class="team-header__text">{{ __('team.subtitle') }}
                    </p>
                </div>
            </section>
            <section class="team-cards">

                <div class="team-card team-card--one">
                    <div class="team-card__img team-card__img--one" role="img" aria-label="Zdjęcie doktor Marianny">
                    </div>
                    <div class="team-card__text-box">
                        <h2 class="team-card__title">{{ __('team.first_dentist') }}</h2>
                        <p class="team-card__text">{{ __('team.first_doctor_description') }}</p>
                    </div>
                    <button class="team-card__about-me">
                        <h2 class="team-card__about-me-title">{{ __('team.find_out_more') }}</h2>
                        <i class="team-card__about-me-icon fa-solid fa-circle-chevron-down"></i>
                    </button>
                    <div class="team-card__more">
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.specialization') }}:</p>
                            <p class="team-card__more-text">{{ __('team.pediatric_dentistry') }}</p>
                        </div>
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.experience') }}:</p>
                            <p class="team-card__more-text">10 {{ __('team.years') }}</p>
                        </div>
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.contact') }}:</p>
                            <div class="team-card__more-box--contact">
                                <p class="team-card__more-text">200-000-000</p>
                                <p class="team-card__more-text">marianne@yourdent.com</p>
                            </div>
                        </div>
                        <div class="team-card__more-opinions">
                            <a class="team-card__more-opinions-text">{{ __('team.link') }}</a>
                            <i class="team-card__more-opinions-icon fa-solid fa-stethoscope"></i>
                        </div>
                    </div>
                </div>

                <div class="team-card team-card--two">
                    <div class="team-card__img team-card__img--two" role="img" aria-label="Zdjęcie doktora Renne"></div>
                    <div class="team-card__text-box">
                        <h2 class="team-card__title">{{ __('team.second_dentist') }}</h2>
                        <p class="team-card__text">{{ __('team.second_doctor_description') }}</p>
                    </div>
                    <button class="team-card__about-me">
                        <h2 class="team-card__about-me-title">{{ __('team.find_out_more') }}</h2>
                        <i class="team-card__about-me-icon fa-solid fa-circle-chevron-down"></i>
                    </button>
                    <div class="team-card__more">
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.specialization') }}:</p>
                            <p class="team-card__more-text">{{ __('team.surgery_prosthetics') }}</p>
                        </div>
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.experience') }}:</p>
                            <p class="team-card__more-text">30 {{ __('team.years') }}</p>
                        </div>
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.contact') }}:</p>
                            <div class="team-card__more-box--contact">
                                <p class="team-card__more-text">300-000-000</p>
                                <p class="team-card__more-text">rene@yourdent.com</p>
                            </div>
                        </div>
                        <div class="team-card__more-opinions">
                            <a class="team-card__more-opinions-text">{{ __('team.link') }}</a>
                            <i class="team-card__more-opinions-icon fa-solid fa-stethoscope"></i>
                        </div>
                    </div>
                </div>
                <div class="team-card team-card--three">
                    <div class="team-card__img team-card__img--three" role="img" aria-label="Zdjęcie doktor Annet">
                    </div>
                    <div class="team-card__text-box">
                        <h2 class="team-card__title">{{ __('team.third_dentist') }}</h2>
                        <p class="team-card__text">{{ __('team.third_doctor_description') }}</p>
                    </div>
                    <button class="team-card__about-me">
                        <h2 class="team-card__about-me-title">{{ __('team.find_out_more') }}</h2>
                        <i class="team-card__about-me-icon fa-solid fa-circle-chevron-down"></i>
                    </button>
                    <div class="team-card__more">
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.specialization') }}:</p>
                            <p class="team-card__more-text">{{ __('team.Pedoncy') }}</p>
                        </div>
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.experience') }}:</p>
                            <p class="team-card__more-text">15 {{ __('team.years') }}</p>
                        </div>
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.contact') }}:</p>
                            <div class="team-card__more-box--contact">
                                <p class="team-card__more-text">400-000-000</p>
                                <p class="team-card__more-text">anett@yourdent.com</p>
                            </div>
                        </div>
                        <div class="team-card__more-opinions">
                            <a class="team-card__more-opinions-text">{{ __('team.link') }}</a>
                            <i class="team-card__more-opinions-icon fa-solid fa-stethoscope"></i>
                        </div>
                    </div>
                </div>
                <div class="team-card team-card--four">
                    <div class="team-card__img team-card__img--four" role="img" aria-label="Zdjęcie doktor Dominic">
                    </div>
                    <div class="team-card__text-box">
                        <h2 class="team-card__title">{{ __('team.fourth_dentist') }}</h2>
                        <p class="team-card__text">{{ __('team.fourth_doctor_description') }}</p>
                    </div>
                    <button class="team-card__about-me">
                        <h2 class="team-card__about-me-title">{{ __('team.find_out_more') }}</h2>
                        <i class="team-card__about-me-icon fa-solid fa-circle-chevron-down"></i>
                    </button>
                    <div class="team-card__more">
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.specialization') }}:</p>
                            <p class="team-card__more-text">{{ __('team.endodontics_periodontology') }}</p>
                        </div>
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.experience') }}:</p>
                            <p class="team-card__more-text">5 {{ __('team.years') }}</p>
                        </div>
                        <div class="team-card__more-box">
                            <p class="team-card__more-text team-card__more-text--bold">{{ __('team.contact') }}:</p>
                            <div class="team-card__more-box--contact">
                                <p class="team-card__more-text">500-000-000</>
                                <p class="team-card__more-text">dominic@yourdent.com</p>
                            </div>
                        </div>
                        <div class="team-card__more-opinions">
                            <a class="team-card__more-opinions-text">{{ __('team.link') }}</a>
                            <i class="team-card__more-opinions-icon fa-solid fa-stethoscope"></i>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    @include('includes._footer')
    <style>
        @media(min-width: 700px) {
            .faq-image__img {
                background-image: url({{ asset('storage/laboratory_1920.jpg') }});
            }
        }

        .team-header__img {
            background-image: url({{ asset('storage/laboratory_640.jpg') }});
        }

        .team-card__img--one {
            background-image: url({{ asset('storage/dentist1_640.jpg') }});

        }

        .team-card__img--two {
            background-image: url({{ asset('storage/dentist2_640.jpg') }});

        }

        .team-card__img--three {
            background-image: url({{ asset('storage/dentist3_640.jpg') }});

        }

        .team-card__img--four {
            background-image: url({{ asset('storage/dentist4_640.jpg') }});

        }
    </style>
@endsection
