@extends('admin.layouts.admin-panel')

@section('content')
    <span class="d-lg-none">
        @include('admin.terms.includes._nav')
    </span>

    <main class="main d-lg-none" id="main">
        @include('admin.terms.includes._main-mobile')
    </main>

    <div class="container-fluid d-none d-lg-block">
        <div class="row">
            @include('admin.terms.includes._left-side')
            <main class="main col-lg-10" id="main">
                @include('admin.terms.includes._right-side')
            </main>
        </div>
    </div>
@endsection
