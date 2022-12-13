<div class="row mb-3">
    <label for="{{ $name }}" class="col-md-4 col-form-label text-md-end fs-5">{{ __($name) }}</label>

    <div class="col-md-6">
        <input id="{{ $name }}" type="{{ $type }}" class="form-control @error($name) is-invalid @enderror"
            name="{{ $name }}" value="{{ $data }}" {{ $required ?? '' }} autocomplete="{{ $name }}"
            autofocus>

        @error('pesel')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
