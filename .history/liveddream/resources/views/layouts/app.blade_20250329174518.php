<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Lived Dream')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" />

    <style>
        /* Custom Styles */
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 250px;
            background: #343a40;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 10px;
            transition: width 0.3s ease-in-out;
        }

        .sidebar .nav-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px;
            margin-bottom: 5px;
            text-decoration: none;
            color: #ebdfdf;
            font-weight: 600;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        #sidebar.collapsed {
            width: 80px;
        }

        #sidebar.collapsed .nav-item .nav-text {
            display: none;
        }

        #sidebar.collapsed .sidebar-title {
            opacity: 0;
        }

        .sidebar a:hover {
            background: #495057;
        }

        .sidebar .sidebar-title {
            transition: opacity 0.3s;
        }

        .main-content {
            margin-left: 260px;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out, width 0.3s ease-in-out;
            width: calc(100% - 260px);
        }

        #sidebar.collapsed + .main-content {
            margin-left: 80px;
            width: calc(100% - 80px);
        }

        /* ✅ Fix Sidebar Toggle Button */
        #sidebartoggle {
            font-size: 24px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            position: absolute;
            left: 270px;
            top: 15px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        /* ✅ Move Button When Sidebar Collapses */
        #sidebar.collapsed ~ .main-content #sidebartoggle {
            left: 90px;
            width: 30px;
            height: 30px;
            font-size: 18px;
        }

        .navbar {
            background: rgb(211, 218, 225);
        }

        .sidebar-brand {
            color: white;
            text-decoration: none;
            gap: 5%;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <a class="sidebar-brand d-flex">
        <div class="brand">
            <img src="img/WhatsApp Image 2025-02-21 at 12.10.11 1.png" alt="" class="logo">
        </div>
        <h4 class="sidebar-title">Lived Dream</h4>
    </a>

    <hr class="sidebar-divider my-0">
    <a href="#" class="nav-item"><img src="img/hugeicons_menu-square.png" alt=""> <span class="nav-text">Dashboard</span></a>
    <a href="#" class="nav-item"><img src="img/Vector.png" alt=""> <span class="nav-text">Quotations</span></a>
    <a href="/products" class="nav-item"><img src="img/Vector.png" alt=""><span class="nav-text">Products</span></a>
    <a href="/companies" class="nav-item"><img src="img/Vector (2).png" alt=""><span class="nav-text">Companies</span></a>
    <a href="#" class="nav-item"><img src="img/Vector (3).png" alt=""><span class="nav-text">Categories</span></a>
    <a href="#" class="nav-item"><img src="img/Vector (4).png" alt=""><span class="nav-text">Zones</span></a>
    <a href="/adhesive" class="nav-item"><img src="img/Vector (5).png" alt=""><span class="nav-text">Adhesive</span></a>
    <a href="#" class="nav-item"><img src="img/Vector (6).png" alt=""><span class="nav-text">Samples</span></a>
    <a href="#" class="nav-item"><img src="img/solar_users-group-rounded-outline.png" alt=""><span class="nav-text">Users</span></a>
</div>

<!-- Main Content -->
<div class="main-content">
    <!-- ✅ Sidebar Toggle Button inside Main Content -->
    <button id="sidebartoggle" class="btn">
        <span class="material-symbols-outlined">menu</span>
    </button>

    <div class="container mt-4">
        @yield('content')
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let toggleButton = document.getElementById('sidebartoggle');
        let sidebar = document.getElementById('sidebar');

        toggleButton.addEventListener('click', function () {
            sidebar.classList.toggle('collapsed');
        });
    });
</script>

</body>
</html>
