@extends('layouts.admin')

@section('content')
    @header
        Terms
    @endheader

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
                    ['column' => 'id', 'name' => 'id'],
                    ['column' => 'date_visit', 'name' => 'date_visit'],
                    ['column' => 'start_visit', 'name' => 'start_visit'],
                    ['column' => 'end_visit', 'name' => 'end_visit'],
                    ['column' => 'user_id', 'name' => 'user_id'],
                    ['column' => 'doctors.name', 'name' => 'name'],
                    ['column' => 'is_done', 'name' => 'is_done'],
                    ['column' => 'is_paid', 'name' => 'is_paid']
                ]
            ])
            @endth_sortable
        @endthead_tr
        <tbody>
            @include('admin.terms._tbody')
        </tbody>
    @endtable

    @pagination_with_buttons
        @pagination(['table' => $terms])
        @endpagination
        <div>
            @create_btn([
                'crud' => 'create',
                'model' => 'TermsGenerator',
                'route' => 'termsGenerators.create',
                'color' => 'success',
                'text' => 'add terms'
            ])
            @endcreate_btn
            @create_btn([
                'crud' => 'create',
                'model' => 'Term',
                'route' => 'terms.create',
                'color' => 'success',
                'text' => 'add term'
            ])
            @endcreate_btn
        </div>
    @endpagination_with_buttons

    <section class="container">
        <h1 class="col-4 text-center">search User</h1>
        <form class="d-flex col-4 flex-column">

            <input type="date" class="form-control" name="start_day" value="{{ $start_day }}">
            <input type="date" class="form-control" name="end_day" value="{{ $end_day }}">
            <input type="time" class="form-control" name="start_time" value="{{ $start_time }}">
            <input type="time" class="form-control" name="end_time" value="{{ $end_time }}">
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button class="btn btn-primary">
                        {{ __('Search') }}
                    </button>
                </div>
            </div>
        </form>
    </section>
@endsection
