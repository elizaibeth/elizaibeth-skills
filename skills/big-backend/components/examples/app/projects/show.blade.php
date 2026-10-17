@extends('layouts.admin')
@section('title', $record->name)
@section('content')
<div class="mb-5 flex flex-wrap items-center justify-between gap-4">
    <h1 class="break-all text-xl font-medium text-slate-800 dark:text-graphite-50 lg:text-2xl">{{ $record->name }}</h1>
    <a href="{{ route('customers.projects.edit', [$customer, $record]) }}" class="bb-action bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong">Edit project</a>
</div>
<div class="grid gap-5 lg:grid-cols-2">
    <section class="bb-surface p-4 sm:p-5">
        <h2 class="text-base font-medium tracking-wide text-slate-700 dark:text-graphite-100">Details</h2>
        <dl class="mt-4 grid grid-cols-[max-content_1fr] gap-x-6 gap-y-2">
            <dt class="text-slate-400 dark:text-graphite-300">Status</dt><dd><x-status :value="$record->status" /></dd>
            <dt class="text-slate-400 dark:text-graphite-300">Due</dt><dd>{{ $record->due_on?->toFormattedDateString() ?? 'Not set' }}</dd>
            <dt class="text-slate-400 dark:text-graphite-300">Budget</dt><dd>{{ number_format($record->budget, 2) }}</dd>
            <dt class="text-slate-400 dark:text-graphite-300">Billable</dt><dd>{{ $record->is_billable ? 'Yes' : 'No' }}</dd>
        </dl>
    </section>
    <section class="bb-surface p-4 sm:p-5">
        <h2 class="text-base font-medium tracking-wide text-slate-700 dark:text-graphite-100">Description</h2>
        <p class="mt-4 whitespace-pre-line">{{ $record->description ?: 'No description.' }}</p>
    </section>
</div>
<section class="mt-6" aria-labelledby="project-tasks"><div class="mb-3 flex flex-wrap items-center justify-between gap-4"><h2 id="project-tasks" class="text-base font-medium tracking-wide text-slate-700 dark:text-graphite-100">Open tasks</h2><a class="bb-action border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 dark:border-graphite-450 dark:text-graphite-50 dark:hover:bg-graphite-500 dark:focus:bg-graphite-500" href="{{ route('customers.projects.tasks.create', [$customer, $record]) }}">Create task</a></div>
@if ($tasks->isEmpty())
<x-empty>No open tasks. Create the first task for this project.</x-empty>
@else
<x-table :headings="['Task', 'Assignee', 'Status']">
@foreach ($tasks as $task)
<x-tr><x-td class="break-words"><a class="font-medium text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal" href="{{ route('customers.projects.tasks.show', [$customer, $record, $task]) }}">{{ $task->title }}</a></x-td><x-td>{{ $task->assignee?->name ?? 'Unassigned' }}</x-td><x-td><x-status :value="$task->status" /></x-td></x-tr>
@endforeach
</x-table>
<p class="mt-3"><a class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal" href="{{ route('customers.projects.tasks.index', [$customer, $record]) }}">All tasks of this project</a></p>
@endif
</section>
{{-- Deletion asks for the record's name; the controller compares it before deleting. --}}
<form class="bb-surface mt-5 max-w-3xl bb-form p-4 sm:p-5" method="POST" action="{{ route('customers.projects.destroy', [$customer, $record]) }}">@csrf @method('DELETE')
<h2 class="text-base font-medium tracking-wide text-slate-700 dark:text-graphite-100">Delete this project</h2>
<p class="text-slate-400 dark:text-graphite-300">Deletes <strong class="break-words">{{ $record->name }}</strong> of {{ $customer->name }} for good, with its tasks. Invoices already sent are kept.</p>
<label class="block font-medium text-slate-600 dark:text-graphite-100" for="confirm_name">Type the project name to confirm</label><input class="bb-field mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal" id="confirm_name" name="confirm_name" required autocomplete="off">
<button class="bb-action bg-error font-medium text-white hover:bg-error-focus focus:bg-error-focus" type="submit">Delete project</button></form>
@endsection
