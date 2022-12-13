@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create_Term') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('terms.store') }}">
                            @csrf

                            @input(['name' => 'date_visit', 'type' => 'date', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'start_visit', 'type' => 'time', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'end_visit', 'type' => 'time', 'required' => 'required'])
                            @endinput


                            <div class="row mb-3">
                                <label for="doctor_id"
                                    class="col-md-4 col-form-label text-md-end fs-5 @error('doctor_id') is-invalid @enderror">{{ __('doctor_id') }}</label>
                                <div class="col-md-6">
                                    <select name="doctor_id" id="doctor_id"
                                        class="form-control @error('doctor_id') is-invalid @enderror">

                                        @foreach ($doctors as $doctor)
                                            <option value="{{ $doctor->id }}"
                                                {{ $doctor->id == old('doctor_id') ? 'selected' : '' }}>{{ $doctor->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="@error('doctor_id') is-invalid @enderror"></div>
                            @error('doctor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror







                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
