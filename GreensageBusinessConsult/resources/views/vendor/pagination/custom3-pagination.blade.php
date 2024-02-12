@if ($paginator->hasPages())


 <div class="pagination-container">
    <ul class="pagination">
    @if ($paginator->onFirstPage())
        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            {{-- <span aria-hidden="true">&lsaquo;</span> --}}
            <a href="#" class="prev">< Prev</a>
        </li>
    @else
        <li>
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li>
    @endif


      {{-- Pagination Elements --}}
      @foreach ($elements as $element)
      {{-- "Three Dots" Separator --}}
      @if (is_string($element))
          <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
      @endif

      {{-- Array Of Links --}}
      @if (is_array($element))
          @foreach ($element as $page => $url)
              @if ($page == $paginator->currentPage())
                  <li class="pageNumber active" aria-current="page"><a href="#">{{ $page }}</a></li>
              @else
                  <li class="pageNumber"><a href="{{ $url }}">{{ $page }}</a></li>
              @endif
          @endforeach
      @endif
  @endforeach



      
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    {{-- <span aria-hidden="true">&rsaquo;</span> --}}
                    <a href="#" class="next">Next ></a>
                </li>
            @endif
  
    </ul>
  </div>

  @endif