@extends('layouts.guest')
@section('title', 'Sign in')
@section('content')
<div class="text-center">
    <span class="lg:hidden">@include('layouts._logo', ['class' => 'mx-auto size-16'])</span>
    <div class="mt-4">
        <h1 class="text-2xl font-semibold text-slate-600 dark:text-graphite-100">Admin sign in</h1>
        <p class="text-slate-400 dark:text-graphite-300">Manage your projects and customers.</p>
    </div>
</div>
<form action="{{ route('login') }}" method="POST" class="mt-12">
    @csrf
    @include('layouts._messages')
    <label class="block" for="email"><span class="text-slate-600 dark:text-graphite-100">Email</span>
        <input class="bb-field mt-1.5 w-full rounded-xl bg-slate-150 px-3 py-2 ring-brand/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring-3 dark:bg-graphite-900/90 dark:ring-signal/50 dark:hover:bg-graphite-900 dark:focus:bg-graphite-900" type="email" name="email" id="email" value="{{ is_string(old('email')) ? old('email') : '' }}" autocomplete="username" required autofocus>
    </label>
    <label class="mt-4 block" for="password"><span class="text-slate-600 dark:text-graphite-100">Password</span>
        <input class="bb-field mt-1.5 w-full rounded-xl bg-slate-150 px-3 py-2 ring-brand/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring-3 dark:bg-graphite-900/90 dark:ring-signal/50 dark:hover:bg-graphite-900 dark:focus:bg-graphite-900" type="password" name="password" id="password" autocomplete="current-password" required>
    </label>
    <button type="submit" class="bb-action mt-8 h-10 w-full bg-brand font-medium text-white hover:bg-brand-strong focus:bg-brand-strong active:bg-brand-strong/90 dark:bg-signal dark:hover:bg-signal-strong dark:focus:bg-signal-strong">Sign in</button>
</form>
@endsection
