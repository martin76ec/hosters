<?php 

    include '../../model/hire.php';

    session_start();

    $host_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];

    echo $host_id;
    echo $user_id;

   try {
        closeHire($user_id, $host_id);
        echo "<script>alert('Renta terminada con éxito');
        window.location.href='../../index.php';
        </script>";
    } catch (PDOException $e) {
        //throw $th;
    } 
