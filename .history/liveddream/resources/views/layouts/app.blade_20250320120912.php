<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Lived dream')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <style>/* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #f8f9fa;
        }
/* 
        .wrapper {
            display: flex;
            width: 100%;
        } */

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: #343a40;
            color: white;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
            transition: all 0.3s;
        }

        .sidebar .sidebar-title {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .sidebar .logo {
            display: block;
            margin: 0 auto;
            width: 80px;
            height: auto;
        }

        .nav-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-links .nav-item {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        .nav-links .nav-item img {
            width: 20px;
            margin-right: 10px;
        }

        .nav-links .nav-item:hover {
            background: #495057;
            cursor: pointer;
        }

/* Main Content */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
            transition: margin-left 0.3s;
        }

        /* .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        } */

        .search-form {
            display: flex;
            align-items: center;
        }

        .search-form input {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-form button {
            background: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            margin-left: 5px;
            cursor: pointer;
            border-radius: 4px;
        }

        .search-form button:hover {
            background: #0056b3;
        }

        .user-menu {
            display: flex;
            align-items: center;
        }

        .user-menu span {
            margin-right: 10px;
        }

        .user-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

/* Footer */
        footer {
            text-align: center;
            padding: 10px;
            background: white;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }
</style>

   





</head>
<body>
    <div class="wrapper">
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
                <div class="nav-links">
                    <!-- Dashboard -->
                    <a href="#" class="nav-item">
                        <img src="img/hugeicons_menu-square.png" alt=""> Dashboard
                    </a>

                    <!-- Quotations -->
                    <a href="#" class="nav-item">
                        <img src="img/Vector.png" alt=""> Quotations
                    </a>

                    <!-- Products with Collapse -->
                    <!-- <a class="nav-link collapsed nav-item" href="#" data-toggle="collapse" data-target="#collapseProducts"
                        aria-expanded="false" aria-controls="collapseProducts">
                        <img src="img/Vector (1).png" alt=""> <span>Products</span>
                    </a>
                    <div id="collapseProducts" class="collapse">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Product Options:</h6>
                            <a class="collapse-item" href="#">New Product</a>
                            <a class="collapse-item" href="#">Manage Products</a>
                        </div>
                    </div> -->
                    <a href="/products" class="nav-item">
                        <img src="img/Vector (1).png" alt="">Products
                    </a>

                    <!-- Companies -->
                    <a href="/companies" class="nav-item">
                        <img src="img/Vector (2).png" alt=""> Companies
                    </a>

                    <!-- Categories with Collapse -->
                    <!-- <a class="nav-link collapsed nav-item" href="#" data-toggle="collapse" data-target="#collapseCategories"
                        aria-expanded="false" aria-controls="collapseCategories">
                        <img src="img/Vector (3).png" alt=""> <span>Categories</span>
                    </a>
                    <div id="collapseCategories" class="collapse">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Category Options:</h6>
                            <a class="collapse-item" href="#">Add Category</a>
                            <a class="collapse-item" href="#">Manage Categories</a>
                        </div>
                    </div> -->
                    <a href="#" class="nav-item">
                        <img src="img/Vector (3).png" alt="">Categories
                    </a>


                    <!-- Other Items -->
                    <a href="#" class="nav-item">
                        <img src="img/Vector (4).png" alt=""> Zones
                    </a>
                    <a href="/adhesive" class="nav-item">
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

            <div id="content-wrapper" class="d-flex flex-row">


                <div id="content">

    <!-- Topbar -->
                    <nav class="navbar navbar-expand ">

            <!-- Sidebar Toggle (Topbar) -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>

            <!-- Topbar Search -->
                            <form
                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                        aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">

                                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                <li class="nav-item dropdown no-arrow d-sm-none">
                                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-search fa-fw"></i>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                        aria-labelledby="searchDropdown">
                                        <form class="form-inline mr-auto w-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small"
                                                    placeholder="Search for..." aria-label="Search"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>



                            

                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                            <img class="img-profile rounded-circle"
                                                src="img/undraw_profile.svg">
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Profile
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Settings
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Activity Log
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Logout
                                            </a>
                                        </div>
                                    </li>
                                </div>
                            </ul>

                    </nav>
    <!-- End of Topbar -->
                </div>
</div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
    </a>
      

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
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
