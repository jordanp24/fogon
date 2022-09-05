<script type="text/javascript">
    // if (!sessionStorage.getItem('firstname')) location.href = "../../login/views/login.php";

    function validarRol() {
        let rawFile = new XMLHttpRequest();
        let file = null;
        if (sessionStorage.getItem('rol') == 1) file = "./modules/include/views/navbarAdmin.php";
        else if (sessionStorage.getItem('rol') == 2) file = "./modules/include/views/navbarEncargado.php";
        // else if (sessionStorage.getItem('rol') == 3) file = "./modules/include/views/navbarVendedor.php";
        else file = "./modules/include/views/navbardefault.php";
        rawFile.open("GET", file, false)
        rawFile.onreadystatechange = function() {
            if (rawFile.readyState === 4) {
                if (rawFile.status === 200 || rawFile.status === 0) {
                    // console.log(rawFile.responseText)
                    document.write(rawFile.responseText)
                }
            }
        }
        rawFile.send(null);
        console.clear();
    }

    validarRol();
</script>