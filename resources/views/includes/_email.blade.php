<section class="contact" id="contact">
    <div class="wrapper contact__container">
        <h2 class="contact__title">Skontaktuj się z nami</h2>
        <form action="{{ route('send.email') }}" method="POST" class="contact__form">
            @csrf
            <div class="contact__form-box  @error('name') is-invalid @enderror">
                <label for="name" class="contact__form-title">Imię i Nazwisko:</label>
                <input type="text" id="name" value="{{ old('name') }}" name="name"
                    class="contact__form-input">
            </div>
            @error('name')
                <span class="invalid-feedback text-center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="contact__form-box @error('email') is-invalid @enderror">
                <label for="email" class="contact__form-title">Email:</label>
                <input type="email" id="email" value="{{ old('email') }}" name="email"
                    class="contact__form-input @error('email') is-invalid @enderror">
            </div>
            @error('email')
                <span class="invalid-feedback text-center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="contact__form-box @error('subject') is-invalid @enderror">
                <label for="subject" class="contact__form-title">subject:</label>
                <input type="text" id="subject" value="{{ old('subject') }}" name="subject"
                    class="contact__form-input ">
            </div>
            @error('subject')
                <span class="invalid-feedback text-center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="contact__form-box @error('message') is-invalid @enderror">
                <label for="message" class="contact__form-title">Wiadomość:</label>
                <textarea name="message" id="message" class="contact__form-textarea ">{{ old('message') }}</textarea>
            </div>
            @error('message')
                <span class="invalid-feedback text-center" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="hidden" name="to" value="{{ config('MAIL_FROM_ADDRESS', 'gamezonestdio@gmail.com') }}">
            <button class="contact__form-btn">Wyślij</button>
        </form>
    </div>
</section>
