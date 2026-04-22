<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="max-w-6xl mx-auto px-4">
        
        {{-- Navbar --}}
        @include('layouts.navbar')

        {{-- Content --}}
        <div class="mt-6">
            @yield('content')
        </div>

    </div>

</body>
</html>