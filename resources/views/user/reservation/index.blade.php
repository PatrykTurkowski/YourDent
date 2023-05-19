@extends('layouts.main')
@section('links')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')
    <main class="main history mt-5 pt-5">
        <section class="container mt-5 pt-5">
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
            <h1 class="mt-5 pt-5">Reservations</h1>
            @foreach ($terms as $term)
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Data wizyty: {{ $term->date_visit }}</h5>
                        <h5 class="card-title">Godzina: {{ $term->start_visit }}</h5>

                        <a href="{{ route('reservations.show', ['reservation' => $term->id]) }}"
                            class="btn btn-primary">szczegóły</a>
                    </div>
                </div>
            @endforeach
        </section>
    </main>
@endsection
