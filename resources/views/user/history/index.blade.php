@extends('layouts.main')
@section('links')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')
    <main class="main history mt-5 pt-5">
        <section class="container mt-5 pt-5">

            <h1 class="mt-5 pt-5">History</h1>
            @foreach ($terms as $term)
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Data wizyty: {{ $term->date_visit }}</h5>
                        <h5 class="card-title">Godzina: {{ $term->start_visit }}</h5>

                        <a href="{{ route('histories.show', ['history' => $term->id]) }}"
                            class="btn btn-primary">szczegóły</a>
                    </div>
                </div>
            @endforeach
        </section>
    </main>
@endsection
