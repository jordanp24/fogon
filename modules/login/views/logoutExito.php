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
            sessionStorage.removeItem('idu');
            sessionStorage.removeItem('rol');
            sessionStorage.removeItem('firstname');
            sessionStorage.removeItem('lastname');
            sessionStorage.removeItem('user');
            location.href = "../../../";
        }


        setTimeout(function() {
            alertaLogOut();
            console.clear()
        }, 500);
    </script>
</body>

</html>