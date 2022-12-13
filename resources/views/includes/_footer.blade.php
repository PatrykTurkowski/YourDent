<footer class="footer">
    <div class="wrapper">
        <div class="footer__container">
            <div class="footer__localization-box">
                <h3 class="footer__title">{{ __('t.location') }}</h3>
                <iframe class="footer__map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3158.4400583843694!2d19.932970469123095!3d50.05354036370706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b6d053619f5%3A0xacb9dfc4d67fa598!2sZamek%20Kr%C3%B3lewski%20na%20Wawelu!5e0!3m2!1spl!2spl!4v1667033593172!5m2!1spl!2spl"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="footer__text-containers">
                <div class="footer__text-container footer__text-adress">
                    <h3 class="footer__title">{{ __('t.clinic_address') }}</h3>
                    <p class="footer__text">ul. Prosta 2, 30 - 123, Kraków</p>
                </div>
                <div class="footer__text-container footer__text-contact">
                    <h3 class="footer__title">{{ __('t.phone_number') }}</h3>
                    <p class="footer__text">+48 123 - 456 - 789</p>
                    <p class="footer__text">+48 125 - 54 - 28</p>
                    <h3 class="footer__title footer__title--email">{{ __('t.email') }}</h3>
                    <p class="footer__text">yourdent12345@dent.com</p>
                </div>
                <div class="footer__text-container footer__text-hours">
                    <h3 class="footer__title">{{ __('t.opening_hours') }}</h3>
                    <p class="footer__text">{{ __('t.monday') }}: 9:00 - 17:00</p>
                    <p class="footer__text">{{ __('t.tuesday') }}: 9:00 - 17:00</p>
                    <p class="footer__text">{{ __('t.wednesday') }}: 7:00 - 15:00</p>
                    <p class="footer__text">{{ __('t.thursday') }}: 7:00 - 15:00</p>
                    <p class="footer__text">{{ __('t.friday') }}: 9:00 - 17:00</p>
                    <p class="footer__text">{{ __('t.saturday') }}: 9:00 - 14:00</p>
                    <p class="footer__text">{{ __('t.closed') }}: {{ __('t.closed') }}</p>

                </div>
            </div>
        </div>
        <p class="footer__footer">&copy; Yourdent | Made by: Adam & Patryk </p>
    </div>
</footer>
