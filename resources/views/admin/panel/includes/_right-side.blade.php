<div class="ms-4">
    @header
        Panel Admin
    @endheader
    <main class="container text-center d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-solid fa-users"></i></li>
                <li class="list-group-item">{{ $users }}</li>

            </ul>
        </div>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-solid fa-book"></i></li>
                <li class="list-group-item">{{ $terms }}</li>
            </ul>
        </div>
    </main>
</div>
