<<<<<<< HEAD
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('/') ?>">
        <img src="<?= base_url('assets/img/logo2.png') ?>" alt="Logo">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <div class="navbar-nav">
          <a class="nav-link" href="<?= base_url('/catalogo') ?>">Catálogo</a>
          <a class="nav-link" href="<?= base_url('/contacto') ?>">Contacto</a>
          <a class="nav-link" href="<?= base_url('/nosotros') ?>">Nosotros</a>
        </div>

        <div class="navbar-nav">
          <?php if (session()->get('usuario')): ?>
            <?php if (session()->get('perfilID') == 1): ?>
              <a class="nav-link" href="<?= base_url('/usuarios') ?>">Usuarios</a>
              <a class="nav-link" href="<?= base_url('/listadoP') ?>">Gestión Productos</a>
              <a class="nav-link" href="<?= base_url('/listadodeventas') ?>">Ventas</a>
              <a class="nav-link" href="<?= base_url('/listadoenvios') ?>">Envíos</a>
              <a class="nav-link" href="<?= base_url('/consultas') ?>">Consultas</a>
            <?php endif; ?>

            <a class="nav-link" href="<?= base_url('/perfil') ?>">Perfil</a>

          <?php if (session()->get('loggedIn')): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/carrito') ?>">
                <i class="fa fa-shopping-cart"></i> Carrito
              </a>
            </li>
          <?php endif; ?>
          
            <form action="<?= base_url('/logout') ?>" method="post" class="d-inline">
              <button class="btn btn-outline-light btn-sm ms-2" type="submit">Cerrar Sesión</button>
            </form>
          <?php else: ?>
            <a class="nav-link" href="<?= base_url('/login') ?>">Login</a>
            <a class="nav-link" href="<?= base_url('/registro') ?>">Registrarse</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
</header>
=======

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center w-100">
            <!-- Logo -->
            <a class="navbar-brand me-auto" href="<?= base_url() ?>" style="flex: 0 0 auto;">
                <img src="<?= base_url('assets/img/logo2.png') ?>" alt="Logo" style="height: 100px;">
            </a>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

            <!-- Botones -->
           <div class="mx-auto">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link active fs-4 fw-semibold" href="<?= base_url() ?>">Inicio</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active fs-4 fw-semibold" href="<?= base_url('catalogo') ?>">Productos</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link active fs-4 fw-semibold" href="<?= base_url('comercializacion') ?>">Comercialización</a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle active fs-4 fw-semibold" href="#" id="userDropdown" role="button">
                         <i class="bi bi-person"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('login') ?>">Iniciar Sesión</a></li>
                     <li><a class="dropdown-item" href="<?= base_url('registrarse') ?>">Registrarse</a></li>
                        </ul>
                    </li>
                    </ul>
            </div>
            
        </div>
    </div>
</nav>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdown = document.querySelector('.nav-item.dropdown');
        dropdown.addEventListener('mouseover', function () {
            this.classList.add('show');
            this.querySelector('.dropdown-menu').classList.add('show');
        });
        dropdown.addEventListener('mouseout', function () {
            this.classList.remove('show');
            this.querySelector('.dropdown-menu').classList.remove('show');
        });
    });
</script>
>>>>>>> bffe2c89d82ce8a4273d947c8a8516cdeac9bc86
