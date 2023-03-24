<?php
    if(isset($_POST['Cerrar'])){
        session_start();
        session_destroy();
        
    }
    header('Location: index.php');
?> 