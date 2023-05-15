<?php include "head.php"; ?>
<body id="page-top">

       <div id="wrapper">
         <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
         <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
               <div class="sidebar-brand-icon rotate-n-12">
                    <i class="fas fa-search"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Panel<sup>Control</sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php  
            include "muestra_menu.php"; 
                    ?>
                      <!-- Divider -->
            <hr class="sidebar-divider"> 

</ul>

<div id="content-wrapper" class="d-flex flex-column">


<!-- Main Content -->
<div id="content">


    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light  bg-white topbar mb-4 static-top shadow">

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
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
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
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>

    <div class="container-fluid">

    <div class="col-xl-13 col-lg-13">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">User</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           
                                        </a>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    
                                <div class="container text-left">
        <a class="btn btn-success" href="add.php" role="button">Agregar</a>
        
        <a class="btn btn-danger" href="#" role="button">Eliminar</a>
        <br>
        <br>
        <table class="table">
        <thead>
            <tr>
            <tr>
                <th>Check</th>
            <th>Nombre</th>
                <th>Correo</th>
                <th>Password</th>
                <th>Permisos</th>
                <th>Ult. Inicio De Secion</th>
                <th>Estatus</th>
                <th>Accion</th>
                
            </tr>
            </thead>
            <tbody>
                    
                    <tr>
                    <td><input type="checkbox"></td>
                    <td>Erick</td>
                    <td>erick@gmail.com</td>
                    <td>erick@</td>
                    <td>Super Admin</td>
                    <td>12/12/2023</td>
                    <td>Activo</td>
                    <td><a class="btn btn-primary" href="#" role="button">Actualizar</a></td>
                    </tr>
                    <tr>
                    <td><input type="checkbox"></td>
                    <td>Pablo</td>
                    <td>pablo@gmail.com</td>
                    <td>pablo@</td>
                    <td>Admin</td>
                    <td>15/05/2023</td>
                    <td>Inactivo</td>
                    <td><a class="btn btn-primary" href="#" role="button">Actualizar</a></td>
                    </tr>
                    <tr>
                    <td><input type="checkbox"></td>
                    <td>Angel</td>
                    <td>angel@gmail.com</td>
                    <td>angel@</td>
                    <td>User</td>
                    <td>01/10/2023</td>
                    <td>En Espera</td>
                    <td><a class="btn btn-primary" href="#" role="button">Actualizar</a></td>
                    </tr>
                     
                
                
    </div>
  </div>
 </div>
</div>
</div>

  
                   
                                </div>

</div>


                
             
