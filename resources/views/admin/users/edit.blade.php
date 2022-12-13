@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('edit') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}">
                            @csrf
                            @method('put')
                            @input_edit(['data' => $user->name, 'name' => 'name', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input_edit(['data' => $user->surname, 'name' => 'surname', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input_edit(['data' => $user->phone_number, 'name' => 'phone_number', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input_edit(['data' => $user->pesel, 'name' => 'pesel', 'type' => 'text', 'required' => 'required maxlength=11'])
                            @endinput
                            @input_edit(['data' => $user->date_of_birth, 'name' => 'date_of_birth', 'type' => 'date', 'required' => 'required'])
                            @endinput
                            @input_edit(['data' => $user->city, 'name' => 'city', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input_edit(['data' => $user->street, 'name' => 'street', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input_edit(['data' => $user->street_number, 'name' => 'street_number', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input_edit(['data' => $user->apartment_number, 'name' => 'apartment_number', 'type' => 'text'])
                            @endinput
                            @input_edit(['data' => $user->postcode, 'name' => 'postcode', 'type' => 'text', 'required' => 'required maxlength=5'])
                            @endinput
                            @input_edit(['data' => $user->email, 'name' => 'email', 'type' => 'email', 'required' => 'required'])
                            @endinput


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
