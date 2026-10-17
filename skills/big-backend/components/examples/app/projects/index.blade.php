@extends('layouts.admin')
@section('title', 'Projects')
@section('content')
<div class="mb-5 flex flex-wrap items-center justify-between gap-4"><h1 class="text-xl font-medium text-slate-800 dark:text-graphite-50 lg:text-2xl">Projects</h1><a class="bb-action bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong" href="{{ route('customers.projects.create', $customer) }}">Create project</a></div>
<p class="mb-5 max-w-3xl text-slate-400 dark:text-graphite-300">The projects you run for {{ $customer->name }}.</p>
<form method="GET" class="mb-5 flex flex-wrap items-end gap-3">
    <label for="status" class="block font-medium text-slate-600 dark:text-graphite-100">Status
        <select id="status" name="status" class="bb-select mt-1.5 block rounded-xl border border-slate-300 bg-white px-3 py-2 pr-9 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:bg-graphite-700 dark:hover:border-graphite-400 dark:focus:border-signal">
            <option value="">All</option>
            @foreach (['draft' => 'Draft', 'in_progress' => 'In progress', 'completed' => 'Completed'] as $value => $label)
                <option value="{{ $value }}" @selected(request('status') === $value)>{{ $label }}</option>
            @endforeach
        </select>
    </label>
    <button type="submit" class="bb-action border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 dark:border-graphite-450 dark:text-graphite-50 dark:hover:bg-graphite-500 dark:focus:bg-graphite-500">Filter</button>
</form>
@if ($records->isEmpty())
<div class="bb-surface px-4 py-10 text-center sm:px-5"><h2 class="text-base font-medium text-slate-700 dark:text-graphite-100">No projects yet</h2><p class="mt-2 text-slate-400 dark:text-graphite-300">Create a project to start tracking its tasks.</p></div>
@else
<x-table :headings="['Project', 'Status', 'Due', 'Budget', '']">
@foreach ($records as $record)
<x-tr><x-td class="break-words"><a class="font-medium text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal" href="{{ route('customers.projects.show', [$customer, $record]) }}">{{ $record->name }}</a></x-td><x-td><x-status :value="$record->status" /></x-td><x-td class="whitespace-nowrap">{{ $record->due_on?->toFormattedDateString() ?? 'Not set' }}</x-td><x-td class="whitespace-nowrap">{{ number_format($record->budget, 2) }}</x-td><x-td class="text-right"><a class="font-medium text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal" href="{{ route('customers.projects.edit', [$customer, $record]) }}" aria-label="Edit {{ $record->name }}">Edit</a></x-td></x-tr>
@endforeach
</x-table>
@endif
{{-- withQueryString() on the paginator keeps the filter on every page link. --}}
<div class="mt-5">{{ $records->links() }}</div>
@endsection
