@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create_Category') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.update', $category->id) }}">
                            @csrf
                            @method('put')
                            @input_edit(['name' => 'name', 'type' => 'text', 'required' => 'required', 'data' => $category->name])
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
