<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">El Fogón Histórico</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre nosotros</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menú</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specialidades</a></li>
          <li><a class="nav-link scrollto" href="#events">Eventos</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallería</a></li>
          <li class="dropdown"><a href="#"><span>Administración</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Clientes</a></li>
              <li class="dropdown"><a href="#"><span>Reservaciones</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Agregar</a></li>
                  <li><a href="#">Confirmar</a></li>
                  <li><a href="#">Modificar</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Eventos</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Ver</a></li>
                  <!-- <li><a href="#">Modificar</a></li> -->
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contactanos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <!-- <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Opiniones</a> -->
      <!-- <a href="" class="book-a-table-btn scrollto d-none d-lg-flex"> -->
        <script>
          if (sessionStorage?.getItem('idu')) {
            document.write(` <a href="./modules/login/views/logoutExito.php" class="book-a-table-btn scrollto d-none d-lg-flex"> ${sessionStorage.getItem('firstname')} ${sessionStorage.getItem('lastname')} </a>`);
          } else document.write(` <a href="./modules/login/views/login.php" class="book-a-table-btn scrollto d-none d-lg-flex"> Iniciar sesión </a>`);
        </script>
      <!-- </a> -->

    </div>
  </header><!