@if ($paginator->hasPages())
    <div>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="visit__previous-btn" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
            @else
                <li class="visit__previous-btn"><a href="{{ $paginator->previousPageUrl() }}"
                        rel="prev">@lang('pagination.previous')</a></li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="visit__next-btn"><a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li>
            @else
                <li class="visit__previous-btn" aria-disabled="true"><span>@lang('pagination.next')</span></li>
            @endif
        </ul>
    </div>
@endif
