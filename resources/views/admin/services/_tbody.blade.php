@foreach ($services as $key => $service)
    <tr>
        @if ($service->trashed())
            @td_table(['items' => [$service->id, $service->name, isset($service->categories->name) ?
            $service->categories->name : ''],'trash'=>'text-danger'])
        @else
            @td_table([
                'items' => [$service->id, $service->name, isset($service->categories->name) ? $service->categories->name : '']
            ])
            @endif
        @endtd_table
        <td class="d-flex">

            @action_edit_btn([
                'table' => 'service',
                'route' => 'services.edit',
                'id' => $service->id
            ])
            @endaction_edit_btn

            @deleteAndRestore([
                'table' => 'service',
                'route' => 'services',
                'trash' => $service->trashed(),
                'id' => $service->id
            ])
            @enddeleteAndRestore


        </td>
    </tr>
@endforeach
