@extends('layouts.main')
@section('links')
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')
    @include('includes._header')
    <main class="main" id="main">
        @include('includes._offer')
        @include('includes._email')
    </main>
    @include('includes._footer')
@endsection
