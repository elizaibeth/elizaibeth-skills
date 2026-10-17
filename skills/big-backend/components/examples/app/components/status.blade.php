@props(['value'])
@php
    // One colour per kind of state, the same on every screen.
    $tone = match ($value) {
        'active', 'paid', 'completed', 'enabled' => 'bg-success/10 text-success dark:bg-success/15',
        'failed', 'overdue', 'cancelled' => 'bg-error/10 text-error dark:bg-error/15',
        'pending', 'in_progress', 'sent' => 'bg-warning/10 text-warning dark:bg-warning/15',
        'draft' => 'bg-info/10 text-info dark:bg-info/15',
        default => 'bg-slate-150 text-slate-800 dark:bg-graphite-500 dark:text-graphite-100',
    };
@endphp
<span {{ $attributes->class(['bb-badge rounded-full', $tone]) }}>{{ $slot->isEmpty() ? ucfirst(str_replace('_', ' ', $value)) : $slot }}</span>
