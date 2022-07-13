@if ($paginator->hasPages())
    <div class="ts-pagination text-center mb-20">
    <ul class="pagination">

        @if ($paginator->onFirstPage())
            <li class=""><span><i class="fa fa-angle-double-left"></i></span></li>
        @else
            <li><a class="" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-double-left"></i></a></li>
        @endif



        @foreach ($elements as $element)

            @if (is_string($element))
                <li class=""><span>{{ $element }}</span></li>
            @endif



            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" style="background-color: greenyellow"><span>{{ $page }}</span></li>
                    @else
                        <li><a class="" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <li><a class="" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-double-right"></i></a></li>
        @else
            <li class=""><span><i class="fa fa-angle-double-right"></i></span></li>
        @endif
    </ul>
    </div>
@endif
