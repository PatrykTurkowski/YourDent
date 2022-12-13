@extends('layouts.main')
@section('links')
    @include('includes._links')
@endsection
@section('content')
    <h1 class="mb-5 text-center">Dzień dobry, {{ $user->name }}</h1>
    <p class="">Udało Ci się zrezygnować z następującego terminu: {{ $term->date_visit }} o godzinie:
        {{ $term->start_visit }}</p>


    <p class=" mt-4">Z pozdrowieniami YourDent</p>
    <p class="tent-muted mt-4">Wiadomość została wygenerowana automatycznie, nie odpowiadaj na nią.</p>
@endsection
