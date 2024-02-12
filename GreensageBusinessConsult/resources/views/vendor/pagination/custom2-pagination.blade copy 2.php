@if ($paginator->hasPages())


{{-- <div class="pagination pagination-style-one m-t-20">
    <a href="#">«</a>
    <a href="#" class="selected">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">»</a>
</div> --}}
 <div class="pagination-style-one">
    <ul class="pagination">
    @if ($paginator->onFirstPage())
        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
            {{-- <span aria-hidden="true">&lsaquo;</span> --}}
            <a href="#" class="disabled">«</a>
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
                  <li class="active selected" aria-current="page"><a href="#" class="active selected">{{ $page }}</a></li>
              @else
                  <li><a href="{{ $url }}">{{ $page }}</a></li>
              @endif
          @endforeach
      @endif
  @endforeach



      
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                    {{-- <a href="#">»</a> --}}
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    {{-- <span aria-hidden="true">&rsaquo;</span> --}}
                    <a href="#" class="disabled">»</a>
                </li>
            @endif
  
    </ul>
  </div>

  @endif