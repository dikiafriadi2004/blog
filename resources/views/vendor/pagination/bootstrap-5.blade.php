@if ($paginator->hasPages())
        <div class="paginations text-center mt-30">
            <ul>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li aria-disabled="true">
                        <span>
                            <i class="fa-solid fa-angle-left"></i>
                        </span>
                    </li>
                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}">
                            <i class="fa-solid fa-angle-left"></i>
                        </a>
                    </li>
                @endif

                

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                            <li class="active">
                                <span>{{ $page }}</span>
                            </li>
                            @else
                            <li >
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}">
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </li>
                @else
                    <li class="disabled" aria-disabled="true">
                        <span>
                            <i class="fa-solid fa-angle-right"></i>
                        </span>
                    </li>
                @endif

            </ul>
        </div>

@endif
