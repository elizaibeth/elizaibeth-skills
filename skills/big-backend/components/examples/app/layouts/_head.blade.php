<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Admin') · {{ config('app.name') }}</title>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script>
    // Apply the saved colour mode before the first paint.
    try { localStorage.getItem('_x_darkMode_on') === 'true' && document.documentElement.classList.add('dark'); } catch (error) {}
</script>
