@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create_Terms') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('termsGenerators.store') }}">
                            @csrf
                            @input(['name' => 'start_date', 'type' => 'date', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'end_date', 'type' => 'date', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'start_day', 'type' => 'time', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'end_day', 'type' => 'time', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'start_break', 'type' => 'time', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'end_break', 'type' => 'time', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'time_one_visit', 'type' => 'number', 'required' => 'required'])
                            @endinput



                            <div class="row mb-3">
                                <label for="work_days"
                                    class="col-md-4 col-form-label text-md-end fs-5 @error('work_days') is-invalid @enderror">{{ __('work_days') }}</label>

                                <div class="col-md-6">

                                    <input id="work_days" type="checkbox" class=" work_days " name="work_days[0]"
                                        value="1" @if (old('work_days[0]') == '1') checked="checked" @endif>

                                    <span class="fs-5">pn</span>
                                    <input id="work_days" type="checkbox" class=" work_days " name="work_days[1]"
                                        value="2">
                                    <span class="fs-5">wt</span>
                                    <input id="work_days" type="checkbox" class=" work_days " name="work_days[2]"
                                        value="3">
                                    <span class="fs-5">sr</span>
                                    <input id="work_days" type="checkbox" class=" work_days " name="work_days[3]"
                                        value="4">
                                    <span class="fs-5">czw</span>
                                    <input id="work_days" type="checkbox" class=" work_days " name="work_days[4]"
                                        value="5">
                                    <span class="fs-5">pt</span>
                                    <input id="work_days" type="checkbox" class=" work_days " name="work_days[5]"
                                        value="6">
                                    <span class="fs-5">sb</span>
                                    <input id="work_days" type="checkbox" class=" work_days " name="work_days[6]"
                                        value="7">
                                    <span class="fs-5">nd</span>

                                    @error('work_days')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
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
                            @error('doctor_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @if (!$errors->has('end_visit'))
                                <div class="@error('start_visit') is-invalid @enderror"></div>
                                @error('start_visit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            @endif

                            <div class="@error('end_visit') is-invalid @enderror"></div>
                            @error('end_visit')
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
