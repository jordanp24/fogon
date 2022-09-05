<?php
include("../../../db/conection.php");
$op = $_GET['op'];

switch ($op) {
    case 1:
        $login = json_decode($_POST['valores'], true);
        foreach ($login as $dato) {
            $name = $dato['user'];
            $pass = $dato['pass'];
        }

        $mysqli->query("start transaction");
        $stmt = $mysqli->prepare("SELECT id, tipousuario, nombres, apellidos, usuario FROM usuario WHERE usuario = ? AND contrasena = ?");
        // echo "SELECT idusuario, tipousuario, nombres, apellidos, usuario FROM usuario WHERE usuario = '$name' AND contrasena = '$pass'";
        //$stmt = $mysqli->prepare("insert into users(name, pass) values (?,?)");
        $stmt->bind_param('ss', $name, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        $row = $result->num_rows;

        if ($row) {
            if ($row > 0) {
                // $data = mysqli_fetch_assoc($result);
                $data = $result->fetch_assoc();
                session_start();
                $_SESSION['idu'] = $data['id'];
                $_SESSION['rol'] = $data['tipousuario'];
                $_SESSION['firstname'] = $data['nombres'];
                $_SESSION['lastname'] = $data['apellidos'];
                $_SESSION['user'] = $data['usuario'];
                $rawdata = $_SESSION;
                echo json_encode($rawdata);
                // echo "<script>
                
                // document.write(sessionStorage.setItem('idu', '".$data['id']."'))
                // document.write(sessionStorage.setItem('rol', '".$data['tipousuario']."'))
                // document.write(sessionStorage.setItem('firstname', '".$data['nombres']."'))
                // document.write(sessionStorage.setItem('lastname', '".$data['apellidos']."'))
                // document.write(sessionStorage.setItem('user', '".$data['usuario']."'))
                
                // </script>";
            }
        }
        $mysqli->query("commit");
        break;
    }