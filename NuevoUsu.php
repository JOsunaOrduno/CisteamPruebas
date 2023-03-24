<?php
session_start();
require 'database.php';
$db = new Database;
$con = $db->conectar();
$sql = $con ->prepare("SELECT nombre, correo, contraseña FROM usuarios");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);


    $nombre = $_POST['nombre'];
    $password = $_POST['clave'];
    $email = $_POST['email'];
    $campo = array();


    foreach($resultado as $row){

        if($row['correo'] == $email){
            array_push($campo, "El correo ya ha sido registrado");
        }
    }


        if ($password  == "" || strlen($password) < 5) {
            array_push($campo, "El campo Contraseña no puede estar vacio, ni tener menos de 6 caracteres.");
        }

        if ($nombre == "") {
            array_push($campo, "El campo Nombre no puede estar vacio");
        }

        if (count($campo) > 0){
            $_SESSION['error'] = $campo;
            $_SESSION['secionError'] = 2;

        } else {
            $sql = $con->query("INSERT into usuarios (nombre,correo,contraseña)values('$nombre','$email','$password')");
        }

    header('Location: index.php');
?>