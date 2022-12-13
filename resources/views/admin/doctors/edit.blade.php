@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit_doctor') }}</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('doctors.update', $doctor->id) }}">
                            @csrf
                            @method('put')
                            @input_edit(['name' => 'name', 'type' => 'text', 'required' => 'required', 'data' => $doctor->name])
                            @endinput
                            @input_edit(['name' => 'surname', 'type' => 'text', 'required' => 'required', 'data' => $doctor->surname])
                            @endinput
                            <div class="row mb-3">

                                <label for="category_id"
                                    class="col-md-4 col-form-label text-md-end fs-5">{{ __('Service_category_id') }}</label>
                                <div class="col-md-6">
                                    <select class="col-md-4 col-form-label form-control" name="category_id"
                                        id="category_id">

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $doctor->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>




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
