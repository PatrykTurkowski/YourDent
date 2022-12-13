@extends('layouts.admin')

@section('content')
    @header
        Panel Admin
    @endheader
    <main class="container text-center d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Liczba użytkowników</li>
                <li class="list-group-item">{{ $users }}</li>

            </ul>
        </div>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Liczba zajętych terminów</li>
                <li class="list-group-item">{{ $terms }}</li>
            </ul>
        </div>
    </main>

@endsection
