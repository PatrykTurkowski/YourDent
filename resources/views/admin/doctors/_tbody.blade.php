@foreach ($doctors as $doctor)
    <tr>

        @td_table([
            'items' => [
                $doctor->id,
                $doctor->name,
                $doctor->surname,
                isset($doctor->categories->name) ? $doctor->categories->name : ''
            ]
        ])
        @endtd_table
        <td class="d-flex">

            @action_edit_btn([
                'table' => 'doctor',
                'route' => 'doctors.edit',
                'id' => $doctor->id
            ])
            @endaction_edit_btn
            @action_delete_btn([
                'table' => 'doctor',
                'route' => 'doctors.destroy',
                'id' => $doctor->id
            ])
            @endaction_delete_btn


        </td>
    </tr>
@endforeach
