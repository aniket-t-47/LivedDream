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
            padding-top: 20px;
            padding:10px
        }
        /* .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        } */
        .sidebar .nav-item {
            display: flex;
            align-items: center;
            gap: 10px; /* Space between icon and text */
            padding: 15px 15px;
          
            text-decoration: none;
            color: #ebdfdf;
            font-weight: 600;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
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
        .sidebartoggle{
            justify-content:center;
        }
        .sidebar-brand {
            color:white;
            text-decoration:none;
            gap:5%;
        }
        /* .navbar-nav {
    margin-left: 0 !important;
} */

    </style>
</head>
<body>


<!-- Topbar Navbar -->
  <!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column" >

   <!-- Main Content -->
    <div id="content">

    <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


            <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 align-items-center">
                <span class="material-symbols-outlined">menu</span>
            </button> -->
                <div class="d-flex justify-content-center align-items-center " style="width:37%">
                    <button class="sidebartoggle btn">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                </div>
            <!-- <span class="material-symbols-outlined">menu</span> -->


            <ul class="navbar-nav ms-auto">  <!-- Added ms-auto to align right -->
                


                <div class="topbar-divider d-none d-sm-block"></div>
               
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown  no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg" >
                    </a>

                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="userDropdown">  <!-- Added dropdown-menu-end -->
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i> Settings</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i> Activity Log</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout
                        </a></li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</div>




    <!-- Sidebar  -->
     <div class="sidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" >
                <div class="brand">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                     <img src="img\WhatsApp Image 2025-02-21 at 12.10.11 1.png" alt="" class="logo">
                </div>
                <h4 class="sidebar-title">Lived Dream</h4>
        </a>

            <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <a href="#" class="nav-item"> <img src="img/hugeicons_menu-square.png" alt=""> <span class="nav-text">Dashboard</span></a>
        <a href="#" class="nav-item"> <img src="img/Vector.png" alt=""> <span class="nav-text">Quotations</span> </a>
        <a href="/products" class="nav-item"> <img src="img/Vector.png" alt=""><span class="nav-text">Products</span>  </a>
        <a href="/companies" class="nav-item"> <img src="img/Vector (2).png" alt=""><span class="nav-text">Companies</span> </a>
        <a href="#" class="nav-item"> <img src="img/Vector (3).png" alt=""><span class="nav-text">Categories</span>  </a>
        <a href="#" class="nav-item"><img src="img/Vector (4).png" alt=""><span class="nav-text">Zones</span> </a>
        <a href="/adhesive" class="nav-item"><img src="img/Vector (5).png" alt=""><span class="nav-text">Adhesive</span> </a>
        <a href="#" class="nav-item"><img src="img/Vector (6).png" alt=""><span class="nav-text">Samples</span> </a>
        <a href="#" class="nav-item"> <img src="img/solar_users-group-rounded-outline.png" alt=""><span class="nav-text"> Users</span></a>
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
