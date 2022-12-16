@extends('admin.layouts.admin-panel')

@section('content')
    <span class="d-lg-none">
        @include('admin.doctors.includes._nav')
    </span>

    <main class="main d-lg-none" id="main">
        @include('admin.doctors.includes._main-mobile')
    </main>

    <div class="container-fluid d-none d-lg-block">
        <div class="row">
            @include('admin.doctors.includes._left-side')
            <main class="main col-lg-10" id="main">
                @include('admin.doctors.includes._right-side')
            </main>
        </div>
    </div>
@endsection
