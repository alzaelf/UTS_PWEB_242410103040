<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawStudio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen bg-gray-100 text-gray-800">

    {{-- Navbar --}}
    @include('components.navbar')

    <main class="flex-grow container mx-auto p-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    <x-footer />

</body>
</html>

