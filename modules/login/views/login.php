<!doctype html>
<html lang="en">

<head>
    <title>El Fogón Histórico</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../../../css/style.css">
    <link href="../../../img/fogon.jpg" rel="icon">

</head>

<body class="img js-fullheight" style="background-image: url(../../../images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">EL FOGÓN HISTÓRICO</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <!-- <h3 class="mb-4 text-center">Have an account?</h3> -->
                        <form id="loginForm" onsubmit="logIn()">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Usuario" required id="login" name="login">
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password" required name="pass">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Iniciar sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../../js/jquery.min.js"></script>
    <script src="../../../js/popper.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/main.js"></script>

    <script>
        window.onload = function() {
            $("#login").val('');
            $("#password-field").val('');
        };

        setTimeout(function() {
            $("#login").val('jordan');
            $("#password-field").val('123');
            console.clear()
        }, 1000);

        $("form").submit(function(e) {
            e.preventDefault();
        });

        function logIn() {
            var user = document.getElementById("login").value;
            var pass = document.getElementById("password-field").value;
            let session = null;
            // alert("User: " + user + ", password: " + pass);

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
                    console.log(response)
                }
            }).done(function(result) {
                if (result) session = JSON.parse(result);
                if (session?.idu) {
                    sessionStorage.setItem('idu', session.idu);
                    sessionStorage.setItem('rol', session.rol)
                    sessionStorage.setItem('firstname', session.firstname);
                    sessionStorage.setItem('lastname', session.lastname);
                    sessionStorage.setItem('user', session.user);
                    alert(`Bienvenido ${session.firstname} ${session.lastname}`);


                    location.href = "../../../";
                } else alert('Revise las credenciales ingresadas');
            }).fail(function(error) {
                alert("Error petición de inicio de sesión: " + error);
            });
        }
    </script>

</body>

</html>