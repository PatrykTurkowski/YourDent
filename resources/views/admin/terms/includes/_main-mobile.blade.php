<div class="container">
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
    <div class="row  d-flex justify-content-center">
        @foreach ($terms as $term)
            <a href="" class="text-decoration-none text-black">
                <div class="card m-1" style="width: 90%;">
                    <div class="card-header d-flex align-items-center">
                        <i class="fa-solid fa-id-card-clip"></i>
                        <span class="ps-2">{{ $term->id }}</span>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">data: {{ $term->date_visit }}</li>
                        <li class="list-group-item">Początek: {{ $term->start_visit }}</li>
                        <li class="list-group-item">Koniec: {{ $term->end_visit }}</li>
                        <li class="list-group-item">Zarezerwował: {{ $term->user_id }}</li>
                        <li class="list-group-item">Zapłacone: {{ $term->is_paid }}</li>
                        <li class="list-group-item">Zakończona: {{ $term->is_done }}</li>
                        <li class="list-group-item d-flex justify-content-end" style="z-index:1000;">
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
                        </li>
                    </ul>
                </div>
            </a>
        @endforeach

    </div>
</div>
