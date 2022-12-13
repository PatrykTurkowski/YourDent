@extends('layouts.main')
@section('links')
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')
    <main class="main history">
        <section class="container">

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
