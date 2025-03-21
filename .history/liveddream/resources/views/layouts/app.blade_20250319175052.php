<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Lived dream')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
            padding-top: 20px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .main-content {
            margin-left: 260px;
            padding: 20px;
        }
        .navbar {
            background: #007bff;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="brand">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <img src="img\WhatsApp Image 2025-02-21 at 12.10.11 1.png" alt="" class="logo">
                </div>
                <h4 class="sidebar-title">Lived Dream</h4>
            </a>

        <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <div class="sidebar">
                <!-- Dashboard -->
                <a href="#" class="nav-item">
                    <img src="img/hugeicons_menu-square.png" alt=""> Dashboard
                </a>

                <!-- Quotations -->
                <a href="#" class="nav-item">
                    <img src="img/Vector.png" alt=""> Quotations
                </a>

                <!-- Products with Collapse -->
                <a class="nav-link collapsed nav-item" href="#" data-toggle="collapse" data-target="#collapseProducts"
                    aria-expanded="false" aria-controls="collapseProducts">
                    <img src="img/Vector (1).png" alt=""> <span>Products</span>
                </a>
                <div id="collapseProducts" class="collapse">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Product Options:</h6>
                        <a class="collapse-item" href="#">New Product</a>
                        <a class="collapse-item" href="#">Manage Products</a>
                    </div>
                </div>

                <!-- Companies -->
                <a href="#" class="nav-item">
                    <img src="img/Vector (2).png" alt=""> Companies
                </a>

                <!-- Categories with Collapse -->
                <a class="nav-link collapsed nav-item" href="#" data-toggle="collapse" data-target="#collapseCategories"
                    aria-expanded="false" aria-controls="collapseCategories">
                    <img src="img/Vector (3).png" alt=""> <span>Categories</span>
                </a>
                <div id="collapseCategories" class="collapse">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Category Options:</h6>
                        <a class="collapse-item" href="#">Add Category</a>
                        <a class="collapse-item" href="#">Manage Categories</a>
                    </div>
                </div>

                <!-- Other Items -->
                <a href="#" class="nav-item">
                    <img src="img/Vector (4).png" alt=""> Zones
                </a>
                <a href="#" class="nav-item">
                    <img src="img/Vector (5).png" alt=""> Adhesive
                </a>
                <a href="#" class="nav-item">
                    <img src="img/Vector (6).png" alt=""> Samples
                </a>
                <a href="#" class="nav-item">
                    <img src="img/solar_users-group-rounded-outline.png" alt=""> Users
                </a>
            </div>









        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        

        </ul>
        <a href="#"><i class="fa-solid fa-th"></i> Dashboard</a>
    <a href="#"><i class="fa-light fa-memo"></i> Quotations</a>
    <a href="/products">Products</a>
    <a href="/companies">Companies</a>
    <a href="#">Categories</a>
    <a href="#">Zones</a>
    <a href="/adhesive">Adhesive</a>
    <a href="#">Samples</a>
    <a href="#">Users</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navigation Bar -->
        {{-- <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Company Management</a>
            </div>
        </nav> --}}

        <!-- Dynamic Content Section -->
        <div class="container mt-4">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
