@if ($paginator->hasPages())
    @php($page = 'flex h-8 min-w-[2rem] items-center justify-center rounded-xl px-3 leading-tight transition-colors')
    <nav aria-label="Pagination" class="flex flex-wrap items-center justify-between gap-3">
        <p class="text-xs-plus text-slate-400 dark:text-graphite-300">{{ $paginator->firstItem() }}–{{ $paginator->lastItem() }} of {{ $paginator->total() }}</p>
        <ol class="bb-pager">
            <li class="rounded-l-lg bg-slate-150 dark:bg-graphite-500">
                @if ($paginator->onFirstPage())<span aria-disabled="true" aria-label="Previous page" class="{{ $page }} opacity-40">‹</span>
                @else<a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="Previous page" class="{{ $page }} hover:bg-slate-300 focus:bg-slate-300 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450">‹</a>@endif
            </li>
            @foreach ($elements as $element)
                @if (is_string($element))<li class="bg-slate-150 dark:bg-graphite-500"><span class="{{ $page }}">{{ $element }}</span></li>@endif
                @if (is_array($element))
                    @foreach ($element as $number => $url)
                        <li class="bg-slate-150 dark:bg-graphite-500">
                            @if ($number == $paginator->currentPage())<span aria-current="page" class="{{ $page }} bg-brand text-white dark:bg-signal">{{ $number }}</span>
                            @else<a href="{{ $url }}" aria-label="Page {{ $number }}" class="{{ $page }} hover:bg-slate-300 focus:bg-slate-300 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450">{{ $number }}</a>@endif
                        </li>
                    @endforeach
                @endif
            @endforeach
            <li class="rounded-r-lg bg-slate-150 dark:bg-graphite-500">
                @if ($paginator->hasMorePages())<a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="Next page" class="{{ $page }} hover:bg-slate-300 focus:bg-slate-300 dark:hover:bg-graphite-450 dark:focus:bg-graphite-450">›</a>
                @else<span aria-disabled="true" aria-label="Next page" class="{{ $page }} opacity-40">›</span>@endif
            </li>
        </ol>
    </nav>
@endif
