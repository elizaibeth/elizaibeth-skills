<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts._head')
</head>
@php
    // A view composer supplies $navigation (see navigation/AdminNavigation.php). The sidebar entries and their
    // icons live here; each key matches a section that the composer can mark.
    $navigation ??= ['section' => 'dashboard', 'crumbs' => [], 'tabs' => null];
    $sections = [
        'dashboard' => ['Dashboard', 'dashboard', 'M4 5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5Zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V5ZM4 16a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3Zm9-4a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-7Z'],
        'projects' => ['Projects', 'projects.index', 'M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7Z'],
        'customers' => ['Customers', 'customers.index', 'M16 20v-1a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v1m13-9a4 4 0 0 0 0-8m5 17v-1a4 4 0 0 0-3-4M13 7a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z'],
        'invoices' => ['Invoices', 'invoices.index', 'M7 3h7l5 5v13H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Zm7 0v5h5M9 13h6m-6 4h4'],
        'settings' => ['Settings', 'settings.edit', 'M4 6h10m4 0h2M4 12h4m4 0h8M4 18h12m4 0h.01M14 4v4M8 10v4m8 2v4'],
    ];
    $tabs = $navigation['tabs'];
@endphp
<body x-data data-section="{{ $navigation['section'] }}" class="bg-slate-50 dark:bg-graphite-900" @keydown.escape.window="$store.global.isSidebarExpanded = false">
    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-2 focus:top-2 focus:z-100 focus:rounded-lg focus:bg-white focus:px-3 focus:py-2 focus:text-brand">Skip to content</a>
    {{-- The sidebar is the same on every page. Below the lg breakpoint it slides in from the menu button. --}}
    <div x-show="$store.global.isSidebarExpanded" x-cloak x-transition.opacity @click="$store.global.isSidebarExpanded = false" class="fixed inset-0 z-30 bg-graphite-900/50 lg:hidden print:hidden"></div>
    <aside :class="$store.global.isSidebarExpanded ? 'translate-x-0' : '-translate-x-full'"
        class="fixed inset-y-0 left-0 z-40 flex w-64 -translate-x-full flex-col border-r border-slate-150 bg-white transition-transform duration-200 dark:border-graphite-700 dark:bg-graphite-800 lg:translate-x-0 print:hidden">
        <a href="{{ route('dashboard') }}" class="flex h-[61px] shrink-0 items-center gap-3 px-5">
            @include('layouts._logo', ['class' => 'size-9'])
            <span class="text-lg font-semibold tracking-wide text-slate-800 dark:text-graphite-50">{{ config('app.name') }}</span>
        </a>
        <nav aria-label="Main" class="scrollbar-sm grow overflow-y-auto px-3 py-4">
            <ul class="space-y-1">
                @foreach ($sections as $key => [$label, $routeName, $icon])
                    <li><a href="{{ route($routeName) }}" @if ($navigation['section'] === $key) aria-current="true" @endif
                        class="flex items-center gap-3 rounded-lg px-3 py-2.5 font-medium tracking-wide outline-hidden transition-colors {{ $navigation['section'] === $key ? 'bg-brand/10 text-brand dark:bg-graphite-600 dark:text-signal-soft' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 focus:bg-slate-100 dark:text-graphite-200 dark:hover:bg-graphite-600 dark:hover:text-graphite-50 dark:focus:bg-graphite-600' }}">
                        <svg class="size-5.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/></svg>
                        {{ $label }}</a></li>
                @endforeach
            </ul>
        </nav>
    </aside>

    <div class="lg:pl-64">
        <header class="sticky top-0 z-20 flex h-[61px] items-center justify-between gap-4 border-b border-slate-150 bg-white/80 px-4 backdrop-blur-sm dark:border-graphite-700 dark:bg-graphite-900/80 sm:px-6 print:hidden">
            <div class="flex min-w-0 items-center gap-4">
                <button class="bb-action size-9 shrink-0 rounded-full p-0 text-brand hover:bg-slate-300/20 focus:bg-slate-300/20 dark:text-signal-soft dark:hover:bg-graphite-300/20 lg:hidden" aria-label="Open navigation"
                    :aria-expanded="$store.global.isSidebarExpanded" @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
                    <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                @if ($navigation['crumbs'])
                    <ol aria-label="Breadcrumb" class="flex min-w-0 items-center gap-x-2 overflow-hidden text-xs-plus sm:text-sm">
                        @foreach ($navigation['crumbs'] as $index => [$label, $url])
                            @if ($index > 0)<li aria-hidden="true" class="hidden text-slate-300 dark:text-graphite-400 sm:block">/</li>@endif
                            <li class="min-w-0 {{ $loop->last ? '' : 'hidden sm:block' }}"><a class="block max-w-48 truncate transition-colors {{ $loop->last ? 'font-medium text-slate-700 dark:text-graphite-100' : 'text-slate-500 hover:text-brand dark:text-graphite-300 dark:hover:text-signal-soft' }}" href="{{ $url }}">{{ $label }}</a></li>
                        @endforeach
                    </ol>
                @endif
            </div>
            <div class="flex shrink-0 items-center gap-2">
                <button @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled" aria-label="Switch between light and dark mode"
                    class="bb-action size-9 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 dark:hover:bg-graphite-300/20 dark:focus:bg-graphite-300/20">
                    <svg x-show="$store.global.isDarkModeEnabled" x-cloak class="size-6 text-warning" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M11.75 3.4a8.6 8.6 0 1 0 8.85 11.7.75.75 0 0 0-.95-.97 7 7 0 0 1-8.7-9.75.75.75 0 0 0-.8-1.04l1.6.06Z"/></svg>
                    <svg x-show="!$store.global.isDarkModeEnabled" class="size-6 text-warning" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M10 2a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0V3a1 1 0 0 1 1-1Zm4 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-.46 4.95.7.7a1 1 0 0 0 1.42-1.41l-.7-.7a1 1 0 0 0-1.42 1.41Zm2.12-10.6a1 1 0 0 1 0 1.4l-.7.71a1 1 0 1 1-1.42-1.41l.7-.7a1 1 0 0 1 1.42 0ZM17 11a1 1 0 1 0 0-2h-1a1 1 0 1 0 0 2h1Zm-7 4a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0v-1a1 1 0 0 1 1-1ZM5.05 6.46A1 1 0 1 0 6.46 5.05l-.7-.7a1 1 0 0 0-1.42 1.4l.7.71Zm1.41 8.49-.7.7a1 1 0 0 1-1.42-1.41l.7-.7a1 1 0 0 1 1.42 1.41ZM4 11a1 1 0 1 0 0-2H3a1 1 0 0 0 0 2h1Z" clip-rule="evenodd"/></svg>
                </button>
                <div x-data="usePopper({ placement: 'bottom-end', offset: 8 })" @click.outside="isShowPopper = false" @keydown.escape="isShowPopper = false">
                    <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="bb-avatar size-9" aria-label="Account menu" :aria-expanded="isShowPopper">
                        <span class="is-initial rounded-full bg-brand/10 text-sm-plus uppercase text-brand dark:bg-signal-soft/15 dark:text-signal-soft">{{ mb_substr(auth()->user()->name ?? '?', 0, 1) }}</span>
                    </button>
                    <div x-ref="popperRoot" :class="isShowPopper && 'show'" class="bb-popover fixed" x-cloak>
                        <div class="popper-box w-64 rounded-xl border border-slate-150 bg-white shadow-soft dark:border-graphite-600 dark:bg-graphite-700">
                            <div class="rounded-t-xl bg-slate-100 px-4 py-4 dark:bg-graphite-800">
                                <p class="break-words text-base font-medium text-slate-700 dark:text-graphite-100">{{ auth()->user()->name ?? '' }}</p>
                                <p class="break-all text-xs text-slate-400 dark:text-graphite-300">{{ auth()->user()->email ?? '' }}</p>
                            </div>
                            <form action="{{ route('logout') }}" method="POST" class="p-4">@csrf
                                <button class="bb-action h-9 w-full bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong dark:bg-signal dark:hover:bg-signal-strong" type="submit">Sign out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main id="main" class="mx-auto grid w-full max-w-7xl grid-cols-1 place-content-start px-4 pb-10 pt-6 sm:px-6">
            @if ($tabs)
                {{-- The pages of the record on screen. The record's name stays above them on every tab. --}}
                <div class="mb-6">
                    @if ($tabs['title'] !== null)
                        <p class="mb-3 flex min-w-0 items-center gap-2"><span class="bb-badge shrink-0 rounded-full bg-brand/10 text-brand dark:bg-signal-soft/15 dark:text-signal-soft">{{ $tabs['kind'] }}</span><span class="truncate text-base font-medium text-slate-700 dark:text-graphite-100">{{ $tabs['title'] }}</span></p>
                    @endif
                    <nav aria-label="{{ $tabs['kind'] }} pages" class="bb-scrollbar-hidden flex gap-1 overflow-x-auto border-b border-slate-200 dark:border-graphite-500">
                        @foreach ($tabs['links'] as $link)
                            <a href="{{ $link['url'] }}" class="-mb-px shrink-0 whitespace-nowrap border-b-2 px-3 py-2.5 font-medium outline-hidden transition-colors {{ $link['active'] ? 'border-brand text-brand dark:border-signal-soft dark:text-signal-soft' : 'border-transparent text-slate-500 hover:border-slate-300 hover:text-slate-800 focus:text-slate-800 dark:text-graphite-300 dark:hover:border-graphite-400 dark:hover:text-graphite-50' }}" @if ($link['active']) aria-current="page"@endif>{{ $link['label'] }}</a>
                        @endforeach
                    </nav>
                </div>
            @endif
            @include('layouts._messages')
            @yield('content')
        </main>
    </div>
</body>
</html>
