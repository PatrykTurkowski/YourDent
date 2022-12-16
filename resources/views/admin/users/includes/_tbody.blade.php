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
