@extends('layouts.main')
@section('links')
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')
    <main class="main history">
        <section class="container">

            <h1 class="mt-5 pt-5">History</h1>

            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Data wizyty: {{ $history->date_visit }}</h5>
                    <h5 class="card-title">Godzina początku: {{ $history->start_visit }}</h5>
                    <h5 class="card-title">Godzina końca: {{ $history->end_visit }}</h5>
                    <h5 class="card-title">Lekarz: {{ $history->doctors->name }}</h5>
                    @if ($history->is_paid)
                        <h5 class="card-title test-success">Badanie zostało opłacone.</h5>
                    @else
                        <h5 class="card-title text-danger">Badanie nie zostało opłacone.</h5>
                    @endif
                    @if ($history->id_done)
                        <h5 class="card-title test-success">Badanie zostało opłacone.</h5>
                    @else
                        <h5 class="card-title text-info">Badanie jeszcze się nie odbyło.</h5>
                    @endif

                    <a href="{{ route('histories.index') }}" class="btn btn-primary">Wróć</a>
                </div>

            </div>

        </section>
    </main>
@endsection
