@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create_service') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('services.update', $service->id) }}">
                            @csrf
                            @method('put')
                            @input_edit(['name' => 'name', 'type' => 'text', 'required' => 'required', 'data' => $service->name])
                            @endinput
                            <div class="row mb-3">
                                <label for="content"
                                    class="col-md-4 col-form-label text-md-end fs-5">{{ __('Service_content') }}</label>
                                <div class="col-md-6">
                                    <textarea name="content" id="content" class="form-control @error('content') is-invalid @enderror">{{ $service->content }}</textarea>


                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            @input_edit(['name' => 'price', 'type' => 'number', 'required' => 'required step=0.01 max=100000', 'data' => $service->price])
                            @endinput
                            <div class="row mb-3">
                                <label for="category_id"
                                    class="col-md-4 col-form-label text-md-end fs-5">{{ __('Service_category_id') }}</label>
                                <div class="col-md-6">
                                    <select name="category_id" id="category_id" class="form-control">

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $service->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    </div>



                    <div class="row mb-3">
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
