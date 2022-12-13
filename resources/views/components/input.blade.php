@if (!isset($label))
    <div class="row mb-3">
@endif
<label for="{{ $name }}"
    class="{{ isset($label) ? $label : 'col-md-4 col-form-label text-md-end fs-5' }}">{{ __($name) }}</label>
@if (!isset($label))
    <div class="col-md-6">
@endif

<input id="{{ $name }}" type="{{ $type }}"
    class="{{ isset($class) ? $class : 'form-control' }} @error($name) is-invalid @enderror" name="{{ $name }}"
    value="{{ isset($value) ? old($value) : old($name) }}" {{ $required ?? '' }} autocomplete="{{ $name }}"
    autofocus>

@error($name)
    <span class="invalid-feedback text-center" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
@if (!isset($label))
    </div>
    </div>
@endif
