@foreach ($items as $item)
    <th scope="col">@sortablelink($item['column'], $item['name'])</th>
@endforeach
<th scope="col">action</th>
