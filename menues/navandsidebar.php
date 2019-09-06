
  <div class="row">
    <div class="col-sm-4">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav"><li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i><?php echo $_SESSION['nombre']." " ?>
      </a>    
      <div class="dropdown-menu dropdown-menu-left" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="modificaradmin.php?id=<?php echo $_SESSION['id']; ?>">Modificar Administrador</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Cerrar sesion</a>
</div>
              <li class="nav-item">
              <a class="nav-link" href="Administrador.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abmusuarios.php">ABM Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="abmviajes.php">ABM VIAJES</a>
            </li>
         

    
      </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="col-sm-8">
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   <span class="navbar-toggler-icon"></span>
 </button>
    </div>
  </div>
