@foreach ($categories as $category)
    <tr>
        @if ($category->trashed())
            @td_table(['items' => [$category->id, $category->name],'trash'=>'text-danger'])
        @else
            @td_table([
                'items' => [$category->id, $category->name]
            ])
            @endif
        @endtd_table
        <td class="d-flex">

            @action_edit_btn([
                'table' => 'category',
                'route' => 'categories.edit',
                'id' => $category->id
            ])
            @endaction_edit_btn


            @if ($category->trashed())
                @can('restore', category::class)
                    <form method="get" action="{{ route('categories.restore', ['category' => $category->id]) }}">
                        @csrf


                        <button type="submit" class="btn"><i class="fa-solid fa-trash-arrow-up fs-3"></i></button>
                    </form>
                @endcan
            @else
                @action_delete_btn([
                    'table' => 'category',
                    'route' => 'categories.destroy',
                    'id' => $category->id
                ])
                @endaction_delete_btn
            @endif

            {{-- @deleteAndRestore([
                'table' => 'category',
                'route' => 'categories',
                'trash' => $category->trashed(),
                'id' => $category->id
            ])
            @enddeleteAndRestore --}}




        </td>
    </tr>
@endforeach
