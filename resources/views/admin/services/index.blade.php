@extends('layouts.admin')

@section('content')
    @header
        Services
    @endheader
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @table
        @thead_tr
            {{-- @th_sortable([
                'items' => [
                    ['column' => 'id', 'name' => 'id'],
                    ['column' => 'name', 'name' => 'name'],
                    ['column' => 'categories.id', 'name' => 'categories']
                ]
            ])
            @endth_sortable --}}
            <th scope="col">@sortablelink('id', 'id')</th>
            <th scope="col">@sortablelink('name', 'name')</th>
            <th scope="col">@sortablelink('categories.name', 'name')</th>
        @endthead_tr
        <tbody>
            @include('admin.services._tbody')

        </tbody>
    @endtable

    @pagination_with_buttons
        @pagination(['table' => $services])
        @endpagination

        @create_btn([
            'crud' => 'create',
            'model' => 'Service',
            'route' => 'services.create',
            'color' => 'success',
            'text' => 'Add Service'
        ])
        @endcreate_btn
    @endpagination_with_buttons
    <section class="container">
        <h1 class="col-4 text-center">search Name</h1>
        <form class="d-flex col-4 flex-column">

            <input type="text" class="form-control" name="search" value="{{ $search }}">
            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button class="btn btn-primary">
                        {{ __('Search') }}
                    </button>
                </div>
            </div>
        </form>
    </section>
@endsection
