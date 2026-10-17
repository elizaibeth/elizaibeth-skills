@php
    // old() can hold any submitted shape, so each value is checked before it is printed.
    $name = old('name', $record->name ?? '');
    $status = old('status', $record->status ?? 'draft');
    $dueOn = old('due_on', isset($record) ? $record->due_on?->format('Y-m-d') : '');
    $budget = old('budget', $record->budget ?? '');
    $description = old('description', $record->description ?? '');
    $isBillable = (bool) old('is_billable', $record->is_billable ?? true);
    $field = 'bb-field mt-1.5 w-full rounded-xl border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-brand dark:border-graphite-450 dark:hover:border-graphite-400 dark:focus:border-signal';
@endphp
<label for="name" class="block font-medium text-slate-600 dark:text-graphite-100">Project name
    <input id="name" name="name" class="{{ $field }}" value="{{ is_string($name) ? $name : '' }}" maxlength="255" required>
</label>
<label for="status" class="block font-medium text-slate-600 dark:text-graphite-100">Status
    <select id="status" name="status" class="bb-select {{ $field }} pr-9 dark:bg-graphite-700">
        @foreach (['draft' => 'Draft', 'in_progress' => 'In progress', 'completed' => 'Completed'] as $value => $label)
            <option value="{{ $value }}" @selected($status === $value)>{{ $label }}</option>
        @endforeach
    </select>
</label>
<label for="due_on" class="block font-medium text-slate-600 dark:text-graphite-100">Due date
    <input id="due_on" name="due_on" type="date" class="{{ $field }}" value="{{ is_string($dueOn) ? $dueOn : '' }}">
</label>
<label for="budget" class="block font-medium text-slate-600 dark:text-graphite-100">Budget
    <input id="budget" name="budget" type="number" min="0" step="0.01" aria-describedby="budget-help" class="{{ $field }}" value="{{ is_scalar($budget) ? $budget : '' }}" required>
</label>
<p id="budget-help" class="text-sm text-slate-400 dark:text-graphite-300">In the customer's currency, without tax.</p>
<label for="description" class="block font-medium text-slate-600 dark:text-graphite-100">Description
    <textarea id="description" name="description" rows="5" class="bb-textarea {{ $field }} font-normal">{{ is_string($description) ? $description : '' }}</textarea>
</label>
{{-- The hidden input sends 0 when the box is cleared, so the update can store false. --}}
<input type="hidden" name="is_billable" value="0">
<label for="is_billable" class="flex items-center gap-2 font-medium text-slate-600 dark:text-graphite-100">
    <input id="is_billable" name="is_billable" type="checkbox" value="1" @checked($isBillable) class="bb-checkbox is-basic size-5 rounded-md border-slate-400/70 checked:border-brand checked:bg-brand hover:border-brand focus:border-brand dark:border-graphite-400 dark:checked:border-signal dark:checked:bg-signal dark:hover:border-signal dark:focus:border-signal">
    Billable
</label>
<div class="flex items-center gap-4 pt-3">
    <button type="submit" class="bb-action bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong">{{ $submitLabel }}</button>
    <a class="text-brand transition-colors hover:text-brand-strong dark:text-signal-soft dark:hover:text-signal" href="{{ isset($record) ? route('customers.projects.show', [$customer, $record]) : route('customers.projects.index', $customer) }}">Cancel</a>
</div>
