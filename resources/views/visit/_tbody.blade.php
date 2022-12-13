@foreach ($terms as $term)
    <tr>

        @td_table([
            'items' => [$term->date_visit, $term->start_visit, $term->doctors->name]
        ])
        @endtd_table
        <td class="d-flex">

            <form method="post" action="{{ route('visits.update', ['visit' => $term->id]) }}">
                @csrf
                @method('put')

                <button class="btn btn-info">Rezerwuj</button>
            </form>

        </td>
    </tr>
@endforeach
