<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookSpace Admin</title>
    @vite(['resources/css/app.css', 'resources/js/admin.js'])
    <style>
        [x-cloak] { display: none !important; }
        .relative { position: relative; }
        .z-50 { z-index: 50; }
    </style>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Dark Mode Toggle -->

    <div class="flex h-screen overflow-hidden">
        <!-- Dynamic Sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto p-8">
            @yield('content')
        </div>
    </div>
    @yield('scripts') sebelum </body>.


    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
