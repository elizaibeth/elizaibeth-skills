<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts._head')
</head>
<body x-data>
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-graphite-900">
        <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
            <a href="{{ route('login') }}" class="flex items-center space-x-2">
                @include('layouts._logo', ['class' => 'size-12'])
                <p class="text-xl font-semibold uppercase text-slate-700 dark:text-graphite-100">{{ config('app.name') }}</p>
            </a>
        </div>
        <div class="hidden w-full place-items-center lg:grid">
            <div class="w-full max-w-lg p-6">
                <p class="text-3xl font-semibold leading-tight text-slate-700 dark:text-graphite-50">Project administration</p>
                <p class="mt-4 text-base text-slate-500 dark:text-graphite-200">Manage projects, customers and invoices in one place.</p>
            </div>
        </div>
        <main id="main" class="flex w-full flex-col items-center bg-white dark:bg-graphite-700 lg:max-w-md">
            <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
