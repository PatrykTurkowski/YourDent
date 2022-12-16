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
        @foreach ($users as $user)
            <a href="" class="text-decoration-none text-black">
                <div class="card m-1" style="width: 90%;">
                    <div class="card-header d-flex align-items-center">
                        <i class="fa-solid fa-id-card-clip"></i>
                        <span class="ps-2">{{ $user->id }}</span>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $user->name }}</li>
                        <li class="list-group-item">{{ $user->surname }}</li>
                        <li class="list-group-item">{{ $user->pesel }}</li>
                        <li class="list-group-item d-flex justify-content-end" style="z-index:1000;">
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
                        </li>
                    </ul>
                </div>
            </a>
        @endforeach
    </div>
</div>
