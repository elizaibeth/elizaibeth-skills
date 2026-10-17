@extends('layouts.admin')
@section('title', 'Create project')
@section('content')
<h1 class="mb-2 text-xl font-medium text-slate-800 dark:text-graphite-50 lg:text-2xl">Create project</h1>
<form action="{{ route('customers.projects.store', $customer) }}" method="POST" class="bb-surface max-w-2xl bb-form p-4 sm:p-5">
    @csrf
    @include('projects._form', ['submitLabel' => 'Create project'])
</form>
@endsection
