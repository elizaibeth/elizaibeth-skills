@if (session('status'))
    <div role="status" class="alert mb-5 flex rounded-xl bg-success/10 px-4 py-3 text-success dark:bg-success/15 sm:px-5">{{ session('status') }}</div>
@endif
@if ($errors->any())
    <div role="alert" class="alert mb-5 rounded-xl bg-error/10 px-4 py-3 text-error dark:bg-error/15 sm:px-5">
        <p class="font-medium">Please check the following:</p>
        <ul class="mt-1.5 list-inside list-disc">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif
