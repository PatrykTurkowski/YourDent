@extends('layouts.main')
@section('links')
    @include('includes._links')
@endsection
@section('content')
    <p>wiadomosć została wysłana z formularza kontaktowego przez: {{ $contact['name'] }}</p>
    <p>email nadawcy: {{ $contact['email'] }}</p>
    <p>Wiadomość od nadawcy:</p>
    <p>{{ $contact['message'] }}</p>
@endsection
