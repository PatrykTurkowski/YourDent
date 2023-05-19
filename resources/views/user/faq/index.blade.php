@extends('layouts.main')
@section('links')
    @include('includes._links')
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/faq.js'])
@endsection
@section('content')
    @include('includes._nav')
    <main class="faq">

        <div class="wrapper">

            <section class="faq-image">

                <div class="faq-image__img" style="" role="img" aria-label="Zdjęcie aparatury dentystycznej"></div>
                <div class="faq-image__shadow"></div>
                <div class="faq-image__text-box">
                    <h1 class="faq-image__title">{{ __('faq.faq') }}</h1>
                    <p class="faq-image__text">{{ __('faq.1') }}</p>
                </div>
            </section>
            <section class="faq-box">
                <div class="faq-box__questions">
                    <div class="faq-box__question">
                        <div class="faq-box__question-box">
                            <p class="faq-box__question-text">{{ __('faq.2') }}</p>
                            <button class="faq-box__btn">
                                <i class=" faq-box__icon fa-solid fa-angles-down"></i>
                            </button>
                        </div>
                        <p class="faq-box__question-answer">{{ __('faq.3') }}</p>
                    </div>
                    <div class="faq-box__question">
                        <div class="faq-box__question-box">
                            <p class="faq-box__question-text">{{ __('faq.4') }}</p>
                            <button class="faq-box__btn">
                                <i class=" faq-box__icon fa-solid fa-angles-down"></i>
                            </button>
                        </div>
                        <p class="faq-box__question-answer">{{ __('faq.5') }}</p>
                    </div>
                    <div class="faq-box__question">
                        <div class="faq-box__question-box">
                            <p class="faq-box__question-text">{{ __('faq.6') }}</p>
                            <button class="faq-box__btn">
                                <i class=" faq-box__icon fa-solid fa-angles-down"></i>
                            </button>
                        </div>
                        <p class="faq-box__question-answer">{{ __('faq.7') }}</p>
                    </div>
                    <div class="faq-box__question">
                        <div class="faq-box__question-box">
                            <p class="faq-box__question-text">{{ __('faq.8') }}</p>
                            <button class="faq-box__btn">
                                <i class=" faq-box__icon fa-solid fa-angles-down"></i>
                            </button>
                        </div>
                        <p class="faq-box__question-answer">{{ __('faq.9') }}</p>
                    </div>
                    <div class="faq-box__question">
                        <div class="faq-box__question-box">
                            <p class="faq-box__question-text">{{ __('faq.10') }}</p>
                            <button class="faq-box__btn">
                                <i class=" faq-box__icon fa-solid fa-angles-down"></i>
                            </button>
                        </div>
                        <p class="faq-box__question-answer">{{ __('faq.11') }}</p>
                    </div>
                    <div class="faq-box__question">
                        <div class="faq-box__question-box">
                            <p class="faq-box__question-text">{{ __('faq.12') }}</p>
                            <button class="faq-box__btn">
                                <i class=" faq-box__icon fa-solid fa-angles-down"></i>
                            </button>
                        </div>
                        <p class="faq-box__question-answer">{{ __('faq.13') }}</p>
                    </div>
                </div>
                <p class="faq-box__source">{{ __('faq.14') }}</p>
            </section>
        </div>
    </main>
    @include('includes._footer')

    <style>
        .faq-image__img {
            background-image: url({{ asset('storage/faq2_640.jpg') }});
        }

        @media(min-width: 700px) {
            .faq-image__img {
                background-image: url({{ asset('storage/faq2_1920.jpg') }});
            }
        }
    </style>
@endsection
