@if ($paginator->hasPages())
  <div class="pagination-wrapper  m-t-10">
    <nav class="pagination is-centered">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination-prev" disable>&lsaquo;</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous" rel="prev">&lsaquo;</a>
        @endif

        <ul class="pagination-list">
          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
              {{-- "Three Dots" Separator --}}
              @if (is_string($element))
                  <a class="pagination-ellipsis">&elip;</a>
              @endif

              {{-- Array Of Links --}}
              @if (is_array($element))
                  @foreach ($element as $page => $url)
                      @if ($page == $paginator->currentPage())
                          <li>
                            <a class="pagination-link is-current">
                              {{ $page }}
                            </a>
                          </li>
                      @else
                          <li><a href="{{ $url }}" class="pagination-link">{{ $page }}</a></li>
                      @endif
                  @endforeach
              @endif
          @endforeach
        </ul>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;</a>
        @else
            <a class="pagination-next" disable>&rsaquo;<a>
        @endif
    </nav>
  </div>
@endif
