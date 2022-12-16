<div class="ms-4">
    <section class="container">
        <div class="row d-flex flex-row-reverse">
            @header
                User
            @endheader


            {{-- <h1 class="col-6 pt-3 pb-3">search User</h1> --}}
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
                    ['column' => 'surname', 'name' => 'surname'],
                    ['column' => 'pesel', 'name' => 'pesel']
                ]
            ])
            @endth_sortable
        @endthead_tr
        <tbody>
            @if (count($users) > 0)
                @foreach ($users as $user)
                    <tr>

                        @td_table(['items' => [$user->id, $user->name, $user->surname, $user->pesel]])
                        @endtd_table
                        <td class="d-flex">

                            @action_edit_btn([
                                'table' => 'user',
                                'route' => 'users.edit',
                                'id' => $user->id
                            ])
                            @endaction_edit_btn
                            @action_delete_btn([
                                'table' => 'user',
                                'route' => 'users.destroy',
                                'id' => $user->id
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
        @pagination(['table' => $users])
        @endpagination

        @create_btn([
            'crud' => 'create',
            'model' => 'User',
            'route' => 'users.create',
            'color' => 'success',
            'text' => 'Add User'
        ])
        @endcreate_btn
    @endpagination_with_buttons

</div>
