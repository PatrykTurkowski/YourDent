@extends('layouts.main')
@section('links')
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')

    <main class="visit mt-5  container " id="main">
        <h1 class="text-center">Umów Wizytę</h1>
        <form class="d-flex col-4 flex-column m-auto ">



            <div class="row mb-3">
                <label for="start_day" class="col-md-4 col-form-label text-md-end fs-5">{{ __('start_day') }}</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" name="start_day" value="{{ $start_day }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="end_day" class="col-md-4 col-form-label text-md-end fs-5">{{ __('end_day') }}</label>
                <div class="col-md-6">
                    <input type="date" class="form-control" name="end_day" value="{{ $end_day }}">
                </div>
            </div>


            <div class="row mb-3">
                <label for="doctor_id"
                    class="col-md-4 col-form-label text-md-end fs-5">{{ __('Service_doctor_id') }}</label>
                <div class="col-md-6">
                    <select name="doctor_id" class="form-control" id="doctor_id">
                        <option value=''>Wybierz lekarza</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id }}" {{ $doctor_id == $doctor->id ? 'selected' : '' }}>
                                {{ $doctor->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>




            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button>
                </div>
            </div>


        </form>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @table
            @thead_tr
                @th_sortable([
                    'items' => [
                        ['column' => 'date_visit', 'name' => 'date_visit'],
                        ['column' => 'start_visit', 'name' => 'start_visit'],
                        ['column' => 'doctors.name', 'name' => 'name']
                    ]
                ])
                @endth_sortable
            @endthead_tr
            <tbody>
                @include('visit._tbody')
            </tbody>
        @endtable
        @if ($terms)
            @pagination(['table' => $terms])
            @endpagination
        @endif


    </main>
    @include('includes._footer')
@endsection
