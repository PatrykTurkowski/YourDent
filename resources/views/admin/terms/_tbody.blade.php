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
