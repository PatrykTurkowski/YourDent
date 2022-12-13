@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create_doctor') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('doctors.store') }}">
                            @csrf
                            @input(['name' => 'name', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            @input(['name' => 'surname', 'type' => 'text', 'required' => 'required'])
                            @endinput
                            <div class="row mb-3">
                                <label for="category_id"
                                    class="col-md-4 col-form-label text-md-end fs-5">{{ __('Service_category_id') }}</label>
                                <div class="col-md-6">
                                    <select name="category_id" class="form-control" id="category_id">

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>




                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
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
