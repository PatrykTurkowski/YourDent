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
                            @method('put')
                            @input_edit(['name' => 'user_id', 'type' => 'number', 'data' => $term->user_id])
                            @endinput

                    </div>


                    <div class="row mb-3">
                        <label for="doctor_id"
                            class="col-md-4 col-form-label text-md-end fs-5 @error('doctor') is-invalid @enderror">{{ __('doctor_id') }}</label>
                        <div class="col-md-6">
                            <select name="doctor_id" id="doctor_id" class="form-control ">

                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}"
                                        {{ $doctor->name == $term->doctors->name ? 'selected' : '' }}>
                                        {{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">


                        @error('doctor_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="row mb-3">
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
@endsection
