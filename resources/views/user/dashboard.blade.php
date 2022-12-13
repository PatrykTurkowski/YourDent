@extends('layouts.main')
@section('links')
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')
    <main class="visit">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @can('viewAny', App\Model\Term::class)
                                <a class="btn btn-primary" href="{{ route('panels.index') }}">
                                    {{ __('Admin Panel') }}
                                </a>
                            @endcan
                            @can('update', App\Model\User::class)
                                <a class="btn btn-primary"
                                    href="{{ route('reservations.index', ['user' => Auth::user()->id]) }}">
                                    {{ __('Reservation') }}
                                </a>
                            @endcan
                            @can('update', App\Model\User::class)
                                <a class="btn btn-primary" href="{{ route('histories.index', ['user' => Auth::user()->id]) }}">
                                    {{ __('History') }}
                                </a>
                            @endcan
                            @can('update', App\Model\User::class)
                                <a class="btn btn-primary" href="{{ route('users.edit', ['user' => Auth::user()->id]) }}">
                                    {{ __('profile') }}
                                </a>
                            @endcan
                            <button class="btn"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
