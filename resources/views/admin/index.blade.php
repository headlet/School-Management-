<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="relative min-h-screen bg-gray-100">
    <!-- Navbar (full width) -->
    <header class="w-full fixed top-0 left-0 z-50">
        @include('layout.admin.common.navbar')
    </header>

    <div class="flex pt-16"> <!-- pt-16 = height of navbar to avoid overlap -->
        <!-- Sidebar (fixed width) -->
        <aside class="sidebar h-screen fixed top-16 left-0 text-white">
            @include('layout.admin.common.sidebar')
        </aside>

        <!-- Main content -->
        <main class="flex-1 ml-56 p-6 main transition-all duration-500 ease-in-out origin-left">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>