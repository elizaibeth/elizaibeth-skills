@extends('layouts.admin')
@section('title', 'Edit project')
@section('content')
<h1 class="mb-2 text-xl font-medium text-slate-800 dark:text-graphite-50 lg:text-2xl">Edit project</h1>
<form action="{{ route('customers.projects.update', [$customer, $record]) }}" method="POST" class="bb-surface max-w-2xl bb-form p-4 sm:p-5">
    @csrf @method('PATCH')
    @include('projects._form', ['submitLabel' => 'Save changes'])
</form>
@endsection
