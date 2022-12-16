<div class="ms-4">
    <section class="container">
        <div class="row d-flex flex-row-reverse">
            @header
                Service
            @endheader


            {{-- <h1 class="col-6 pt-3 pb-3">search Service</h1> --}}
            <form class="col-4 d-flex justify-content-end pb-4">
                <input type="text" class="form-control" name="search" value="{{ $search }}">

                <div class=" pe-4">
                    <button class="btn btn-light">
                        {{ __('Search') }}
                    </button>
                </div>


            </form>
        </div>


    </section>
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
            @th_sortable([
                'items' => [
                    ['column' => 'id', 'name' => 'id'],
                    ['column' => 'name', 'name' => 'name'],
                    ['column' => 'categories.name', 'name' => 'categories']
                ]
            ])
            @endth_sortable
        @endthead_tr
        <tbody>
            @if (count($services) > 0)
                @foreach ($services as $service)
                    <tr>

                        @td_table(['items' => [$service->id, $service->name, $service->categories->name]])
                        @endtd_table
                        <td class="d-flex">

                            @action_edit_btn([
                                'table' => 'service',
                                'route' => 'services.edit',
                                'id' => $service->id
                            ])
                            @endaction_edit_btn
                            @action_delete_btn([
                                'table' => 'service',
                                'route' => 'services.destroy',
                                'id' => $service->id
                            ])
                            @endaction_delete_btn


                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="100" class="text-center">Nie ma rekordu który Cię interesuje :C</td>
                </tr>
            @endif


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

</div>
