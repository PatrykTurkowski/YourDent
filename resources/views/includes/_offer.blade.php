<section class="offer">
    <div class="wrapper offer__container">
        <h1 class="offer__title">Oferta</h1>
        <div class="offer__card-container">
            <div class="offer__card offer__card--one">
                <img class="offer__card-img offer__card-img--one"
                    src="{{ asset('storage/art/dentist-offer-one_640.jpg') }}" alt="Szczoteczka do zębów z pastą"></img>
                <div class="offer__card-text-box">
                    <h2 class="offer__card-title">{{ __('offer.diagnostics') }}</h2>
                    <p class="offer__card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat,
                        repellat?</p>
                    <ul class="offer__card-list">
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.x-ray') }}</span></li>
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.computer_microtomography') }}</span></li>
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.computer_tomography') }}</span></li>
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.medical_consultation') }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="offer__card offer__card--two">
                <img class="offer__card-img offer__card-img--two"
                    src="{{ asset('storage/art/dentist-offer-two_640.jpg') }}"
                    alt="Przyrządy leczenia dentystycznego"></img>
                <div class="offer__card-text-box">
                    <h2 class="offer__card-title">{{ __('offer.pedodontics') }}</h2>
                    <p class="offer__card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat,
                        repellat?</p>
                    <ul class="offer__card-list">
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.lapis') }}</span></li>
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.fluoridation') }}</span>
                        </li>
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.light-curing_composite_filling') }}</span>
                        </li>
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.varnishing') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="offer__card offer__card--three">
                <img class="offer__card-img offer__card-img--three"
                    src="{{ asset('storage/art/dentist-offer-three_640.jpg') }}"
                    alt="Artystyczne przedstawienie procesu naprawy zęba"></img>
                <div class="offer__card-text-box">
                    <h2 class="offer__card-title">{{ __('offer.prosthetics') }}</h2>
                    <p class="offer__card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat,
                        repellat?</p>
                    <ul class="offer__card-list">
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.prosthetic_crown') }}</span> </li>
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.skeletal_prosthesis') }}</span></li>
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.acrylic_prosthesis') }}</span></li>
                        <li class="offer__card-list-element"><span
                                class="offer__card-element">{{ __('offer.tooth_reconstruction_with_a_crown-root_insert') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="#" class="offer__btn">{{ __('main.see_full_offer') }}</a>
    </div>
</section>
<section class="about-us">
    <div class="wrapper about-us__container">
        <img src="{{ asset('storage/art/doctor_1920.jpg') }}" alt="Dentysta podczas pracy" class="about-us__img">
        <div class="about-us__text-container">
            <h2 class="about-us__title">{{ __('main.why_us') }}</h2>
            <ul class="about-us__list">
                <li class="about-us__list-element"><span
                        class="about-us__list-element--text jd">{{ __('main.sentence_1') }}</span></li>
                <li class="about-us__list-element"><span
                        class="about-us__list-element--text">{{ __('main.sentence_2') }}</span></li>
                <li class="about-us__list-element"><span
                        class="about-us__list-element--text">{{ __('main.sentence_3') }}</span></li>
                <li class="about-us__list-element"><span
                        class="about-us__list-element--text">{{ __('main.sentence_4') }}</span></li>
            </ul>
        </div>
    </div>
</section>
