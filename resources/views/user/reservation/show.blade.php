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

            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">Data wizyty: {{ $reservation->date_visit }}</h5>
                    <h5 class="card-title">Godzina początku: {{ $reservation->start_visit }}</h5>
                    <h5 class="card-title">Godzina końca: {{ $reservation->end_visit }}</h5>
                    <h5 class="card-title">Lekarz: {{ $reservation->doctors->name }}</h5>
                    @if ($reservation->is_paid)
                        <h5 class="card-title text-success">Badanie zostało opłacone.</h5>
                    @else
                        <h5 class="card-title text-danger">Badanie nie zostało opłacone.</h5>
                    @endif
                    @if ($reservation->is_done)
                        <h5 class="card-title text-success">Badanie odbyło.</h5>
                    @else
                        <h5 class="card-title text-info">Badanie jeszcze się nie odbyło.</h5>
                    @endif

                    <a href="{{ route('reservations.index') }}" class="btn btn-primary">Wróć</a>
                    @if ($reservation->is_done)
                    @else
                        <form action="{{ route('reservations.update', $reservation->id) }}" method="post">
                            @csrf
                            @method('put')

                            <button class="btn btn-primary">usuń
                                reserwacje</button>
                        </form>
                </div>
                @endif


            </div>

        </section>
    </main>
@endsection
