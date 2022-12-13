@can('delete', $table)
    <form method="POST" action="{{ route($route, [$table => $id]) }}">
        @csrf
        @method('delete')

        <button type="submit" class="btn"><i class="fa-solid fa-trash text-danger fs-3"></i></button>
    </form>
@endcan
