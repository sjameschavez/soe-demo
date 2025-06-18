<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Laravel Tailwind')</title>

    <!-- ✅ Tailwind CSS CDN -->    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4">
            <h1 class="text-2xl font-semibold">SOE DEMO</h1>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container max-w-7xl mx-auto px-10 py-4">
        @yield('content')
    </div>


</body>
</html>
