<ul class="style-none d-flex align-items-center justify-content-center">
    @if ($paginator->onFirstPage())
        <li><span>&laquo;</span></li>
    @else
        <li><a href="{{ $paginator->previousPageUrl() }}">&laquo;</a></li>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <li><span>{{ $element }}</span></li>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li><a class="active">{{ $page }}</a></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
    @else
        <li><span>&raquo;</span></li>
    @endif
</ul>
