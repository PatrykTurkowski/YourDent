@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update_terms') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('terms.update', $term->id) }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="user_id" class="col-md-4 col-form-label text-md-end">{{ __('User') }}</label>

                                <div class="col-md-6">
                                    <input id="user_id" type="number"
                                        class="form-control @error('user_id') is-invalid @enderror" name="user_id"
                                        value="{{ $term->user_id }}" autocomplete="off" autofocus>

                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                    </div>
                    <div class="row mb-3">

                        <div class="row mb-3">
                            <label for="doctor_id" class="col-md-4 col-form-label text-md-end">{{ __('doctor_id') }}</label>

                            <select name="doctor_id" id="doctor_id" class="form-control">

                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}"
                                        {{ $doctor->name == $term->doctors->name ? 'selected' : '' }}>
                                        {{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">


                            @error('doctor_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="row mb-3">
                                <label for="date"
                                    class="col-md-4 col-form-label text-md-end">{{ __('date') }}</label>

                                <div class="col-md-6">
                                    <input id="date" type="date"
                                        class="form-control @error('date') is-invalid @enderror" name="date"
                                        value="{{ date('Y-m-d', strtotime($term->date)) }}" required autocomplete="off"
                                        autofocus>

                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="time"
                                    class="col-md-4 col-form-label text-md-end">{{ __('time') }}</label>

                                <div class="col-md-6">
                                    <input id="time" type="time"
                                        class="form-control @error('time') is-invalid @enderror" name="time"
                                        value="{{ date('H:i', strtotime($term->date)) }}" required autocomplete="off"
                                        autofocus>

                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
 --}}


                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
