@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf


                            @input(['name' => 'name', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'surname', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'phone_number', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'pesel', 'type' => 'text', 'required' => 'required maxlength=11'])
                            @endinput
                            @input(['name' => 'date_of_birth', 'type' => 'date', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'city', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'street', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'street_number', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'apartment_number', 'type' => 'text'])
                            @endinput
                            @input(['name' => 'postcode', 'type' => 'text', 'required' => 'required maxlength=5'])
                            @endinput
                            @input(['name' => 'email', 'type' => 'email', 'required' => 'required'])
                            @endinput
                            @can('destroy', 'App\Models\User')
                                <div class="row mb-3">
                                    <label for="role"
                                        class="col-md-4 col-form-label text-md-end fs-5">{{ __('Role') }}</label>

                                    <div class="col-md-6">


                                        <select name="role" class="form-control" id="role">
                                            <option value="3">Wybierz</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role }}">
                                                    {{ strtolower($role->name) }}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>
                            @endcan
                            @input(['name' => 'password', 'type' => 'password', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'password_confirmation', 'type' => 'password', 'required' => 'required'])
                            @endinput


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
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
