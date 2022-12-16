<div class="ms-4">
    <section class="container">
        <div class="row d-flex flex-row-reverse">
            @header
                Term
            @endheader


            {{-- <h1 class="col-6 pt-3 pb-3">search Term</h1> --}}

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
                    ['column' => 'date_visit', 'name' => 'date_visit'],
                    ['column' => 'start_visit', 'name' => 'start_visit'],
                    ['column' => 'end_visit', 'name' => 'end_visit'],
                    ['column' => 'user_id', 'name' => 'user_id'],
                    ['column' => 'is_done', 'name' => 'is_done'],
                    ['column' => 'is_paid', 'name' => 'is_paid'],
                    ['column' => 'doctors.name', 'name' => 'doctor']
                ]
            ])
            @endth_sortable
        @endthead_tr
        <tbody>
            @if (count($terms) > 0)
                @foreach ($terms as $term)
                    <tr>

                        @td_table([
                            'items' => [
                                $term->id,
                                $term->date_visit,
                                $term->start_visit,
                                $term->end_visit,
                                $term->user_id,
                                $term->doctors->name,
                                $term->is_done,
                                $term->is_paid
                            ]
                        ])
                        @endtd_table
                        <td class="d-flex">

                            @action_edit_btn([
                                'table' => 'term',
                                'route' => 'terms.edit',
                                'id' => $term->id
                            ])
                            @endaction_edit_btn
                            @action_delete_btn([
                                'table' => 'term',
                                'route' => 'terms.destroy',
                                'id' => $term->id
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
        @pagination(['table' => $terms])
        @endpagination

        <div>
            @create_btn([
                'crud' => 'create',
                'model' => 'TermsGenerator',
                'route' => 'termsGenerators.create',
                'color' => 'success',
                'text' => 'add terms'
            ])
            @endcreate_btn
            @create_btn([
                'crud' => 'create',
                'model' => 'Term',
                'route' => 'terms.create',
                'color' => 'success',
                'text' => 'add term'
            ])
            @endcreate_btn
        </div>
    @endpagination_with_buttons
    <form class="d-flex col-4 flex-column">

        <input type="date" class="form-control" name="start_day" value="{{ $start_day }}">
        <input type="date" class="form-control" name="end_day" value="{{ $end_day }}">
        <input type="time" class="form-control" name="start_time" value="{{ $start_time }}">
        <input type="time" class="form-control" name="end_time" value="{{ $end_time }}">
        <div class="row mb-0">
            <div class="mt-3">
                <button class="btn btn-primary">
                    {{ __('Search') }}
                </button>
            </div>
        </div>
    </form>

</div>
