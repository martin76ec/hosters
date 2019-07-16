<?php 

include '../../model/session.php';

session_start();
if (finish($_SESSION['session_id'])) {
    session_destroy();
    header("location: http://localhost/hosters/index.php");
} else {
    echo "No se pudo cerrar sesión";
}