<?php include '../../include/views/head.php'; ?>

<!-- <script type="text/javascript">
    if (sessionStorage.getItem('firstname')) location.href = "../../home/views/";
</script> -->

<link href="../../../css/styles.css" rel="stylesheet" />
<link href="../css/index.css" rel="stylesheet" />

<body class="green lighten-1 login">
    <!-- Pills navs -->
   
    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
        <div id="formContent">

            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="../../../img/memimo.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form id="loginForm" onsubmit="logIn()">
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario / Email">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
                <input type="submit" id="login" class="fadeIn fourth" value="Ingresar">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">¿Olvidó su contraseña?</a>
            </div>

        </div>
    </div>




    <!-- Pills content -->

    <script>
        window.onload = function() {
            $("#login").val('sdfsd');
            $("#password").val('sdfsd');
        };

        setTimeout(function() {
            $("#login").val('jordan');
            $("#password").val('123');
            console.clear()
        }, 500);

        $("form").submit(function(e) {
            e.preventDefault();
        });

        function logIn() {
            var user = document.getElementById("login").value;
            var pass = document.getElementById("password").value;
            let session = null;
            // alert("User: " + user + ", pass: " + pass);

            var credentials = {
                user,
                pass
            };
            var login = [];
            login.push(credentials);

            $.ajax({
                type: "POST",
                url: "../controller/?op=1",
                data: {
                    valores: JSON.stringify(login)
                },
                success: function(response) {
                    // console.log(response)
                }
            }).done(function(result) {
                if (result) session = JSON.parse(result);
                if (session?.idu) {
                    sessionStorage.setItem('idu', session.idu);
                    sessionStorage.setItem('rol', session.rol)
                    sessionStorage.setItem('firstname', session.firstname);
                    sessionStorage.setItem('lastname', session.lastname);
                    sessionStorage.setItem('user', session.user);
                    swal({
                        title: "MEMIMO",
                        text: `Bienvenido ${session.firstname} ${session.lastname}`,
                        icon: "success",
                        // button: "Cerrar",
                        buttons: {
                            confirm: {
                                text: "Cerrar",
                                value: true,
                                visible: true,
                                className: "",
                                closeModal: true
                            }
                        }

                    }).then((value) => {
                        if (value)
                            location.href = "../../home/views";
                        // switch (value) {
                        //     case "defeat":
                        //         swal("Pikachu fainted! You gained 500 XP!");
                        //         break;
                        //     case "catch":
                        //         swal("Gotcha!", "Pikachu was caught!", "success");
                        //         break;
                        //     default:
                        //         swal("Got away safely!");
                        // }
                    });;
                } else swal({
                    title: "MEMIMO",
                    text: 'Revise las credenciales ingresadas',
                    icon: "warning",
                    button: "Cerrar",
                });
            }).fail(function(error) {
                alert("Error petición de inicio de sesión: " + error);
            });

        }
    </script>
</body>

</html>