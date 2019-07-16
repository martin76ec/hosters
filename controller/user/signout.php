<?php 

include '../../model/session.php';

session_start();
if (finish($_SESSION['session_id'])) {
    $language = $_SESSION['language'];
    session_destroy();
    session_start();
    $_SESSION['language'] = $language;
    header("location: http://localhost/hosters/");
} else {
    echo "No se pudo cerrar sesión";
}