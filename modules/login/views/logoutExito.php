<?php include '../../include/views/head.php'; ?>

<!-- <script type="text/javascript">
    if (sessionStorage.getItem('firstname')) location.href = "../../home/views/";
</script> -->

<link href="../../../css/styles.css" rel="stylesheet" />
<link href="../css/index.css" rel="stylesheet" />

<body class="green lighten-1 login">
    <!-- Pills navs -->

    <!------ Include the above in your HEAD tag ---------->
    <script>
        function alertaLogOut() {
            swal({
                title: "MEMIMO",
                text: `¡Sesión cerrada exitosamente!`,
                icon: "warning",
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
                if (value) {
                    localStorage.removeItem('idu');
                    localStorage.removeItem('rol');
                    localStorage.removeItem('firstname');
                    localStorage.removeItem('lastname');
                    localStorage.removeItem('user');
                    location.href = "../../home/views";
                }
            });
        }


        setTimeout(function() {
            alertaLogOut();
            console.clear()
        }, 500);
    </script>
</body>

</html>