@if ($trash)
    @can('restore', $table)
        <form method="get" action="{{ route($route . '.restore', [$table => $id]) }}">
            @csrf


            <button type="submit" class="btn"><i class="fa-solid fa-trash-arrow-up fs-3"></i></button>
        </form>
    @endcan
@else
    @can('delete', $table)
        <form method="POST" action="{{ route($route . '.destroy', [$table => $id]) }}">
            @csrf
            @method('delete')

            <button type="submit" class="btn"><i class="fa-solid fa-trash text-danger fs-3"></i></button>
        </form>
    @endcan
@endif
