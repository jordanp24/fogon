<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light" style="color: #DE0055; font-weight: bold">
            <i class="fa fa-bars" aria-hidden="true"></i>
            Menú
        </div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;Clientes</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp;Productos</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa fa-th-list" aria-hidden="true"></i>&nbsp;Gestion de ventas</a>
        </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <!-- <button class="btn btn-primary" id="sidebarToggle"> -->
                <img id="sidebarToggle" width="2.5%" src="../../../img/memimo.png" id="icon" alt="LOGO" />
                <!-- </button> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item"><a class="nav-link" href="./" style="color: #DE0055; font-weight: bold;">&nbsp;<i class="fa fa-home" aria-hidden="true"></i>Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!" style="color: #DE0055; font-weight: bold;"><i class="fa fa-shopping-basket" aria-hidden="true"></i>&nbsp;Tienda</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #DE0055; font-weight: bold;">
                                <i class="fa fa-user" aria-hidden="true"></i>&nbsp;
                                <script>
                                    if (localStorage?.getItem('idu')) {
                                        document.write(localStorage.getItem('firstname'), ' ', localStorage.getItem('lastname'));
                                    } else document.write('Iniciar sesión')
                                </script>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#!"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;Ver perfil</a>
                                <a class="dropdown-item" href="#!"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;Cambiar contraseña</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../login/views/logoutExito.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid">
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <h3>Request a Demo</h3>
                        <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for you.</p>
                        <div class="card">
                            <h5 class="text-center mb-4">Powering world-class companies</h5>

                            <form class="form-card" onsubmit="event.preventDefault()">
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label ">First name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)"> </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label ">Last name<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label ">Business email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" onblur="validate(3)"> </div>
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label ">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)"> </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label ">Job title<span class="text-danger"> *</span></label> <input type="text" id="job" name="job" placeholder="" onblur="validate(5)"> </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label ">What would you be using Flinks for?<span class="text-danger"> *</span></label> <input type="text" id="ans" name="ans" placeholder="" onblur="validate(6)"> </div>
                                </div>
                                <div class="pt-4 d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary me-md-2" type="button">Button</button>
                                    <button class="btn btn-primary" type="button">Button</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-4">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                </button>
                <br>
                <br>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <h1 class="mt-4">Simple Sidebar</h1>
                <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
                <p>
                    Make sure to keep all page content within the
                    <code>#page-content-wrapper</code>
                    . The top navbar is optional, and just for demonstration. Just create an element with the
                    <code>#sidebarToggle</code>
                    ID which will toggle the menu when clicked.
                </p>
            </div>
        </div>
    </div>


</div>