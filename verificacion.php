<?php 

session_start();
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$campo = array();

require 'database.php';
$db = new Database;
$con = $db->conectar();
$sql = $con ->prepare("SELECT nombre, correo, contraseña FROM usuarios");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach($resultado as $row){

    if($row['correo'] == $usuario && $row['correo'] != '' && $row['contraseña'] == $clave && $row['contraseña']!=''){
        $_SESSION['activo'] = 1;
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['correo'] = $row['correo'];
        header('Location: index.php');
    }else{
        array_push($campo, "Error de inicio de seccion:Usuario y Contraseña Inconrrecta.");
        $_SESSION['error'] = $campo;
        header('Location: index.php');
        $_SESSION['secionError'] = 1;
    }
}

?>