<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Lived dream')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
     <!-- <link rel="stylesheet" href="resources/css/product.css"> -->
     <link rel="stylesheet" href="{{ asset('css/product.css') }}">


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
            background:rgb(211, 218, 225);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Lived Dream</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://via.placeholder.com/30" alt="User Avatar" class="rounded-circle">
                        Rahul K.
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#"> <img src="img/hugeicons_menu-square.png" alt=""> Dashboard</a>
    <a href="#"> <img src="img/Vector.png" alt="">  Quotations</a>
    <a href="/products"> <img src="img/Vector.png" alt=""> Products</a>
    <a href="/companies"> <img src="img/Vector (2).png" alt="">Companies</a>
    <a href="#"> <img src="img/Vector (3).png" alt=""> Categories</a>
    <a href="#"><img src="img/Vector (4).png" alt="">Zones</a>
    <a href="/adhesive"><img src="img/Vector (5).png" alt="">Adhesive</a>
    <a href="#"><img src="img/Vector (6).png" alt="">Samples</a>
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
