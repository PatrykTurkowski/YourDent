@can('{{ $crud }}', 'App\Model\{{ $model }}::class')
    <a href="{{ route($route) }}"><button class="btn btn-{{ $color }} fs-3  mt-3 me-5">{{ $text }}</button></a>
@endcan
