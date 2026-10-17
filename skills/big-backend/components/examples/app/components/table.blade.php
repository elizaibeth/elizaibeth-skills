@props(['headings'])
<div {{ $attributes->class(['bb-surface px-4 pb-4 sm:px-5']) }}>
    <div class="bb-scrollbar-hidden min-w-full overflow-x-auto">
        <table class="is-hoverable w-full text-left">
            <thead>
                <tr class="border-y border-transparent border-b-slate-200 dark:border-b-graphite-500">
                    @foreach ($headings as $heading)<th scope="col" class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-graphite-100 lg:px-5">{{ $heading }}</th>@endforeach
                </tr>
            </thead>
            <tbody>{{ $slot }}</tbody>
        </table>
    </div>
</div>
