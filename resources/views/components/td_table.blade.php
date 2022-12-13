@foreach ($items as $item)
    <td class="{{ $trash ?? '' }}">{{ $item }}</td>
@endforeach
