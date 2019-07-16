<?php

    include '../../model/user.php';
    include '../../model/session.php';
    include '../../model/error.php';


    /*variables*/
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = userExists($email, $password);

    if ($user == false) {
        echo "<script>alert('Usuario o Contraseña incorrectos');
        window.location.href='../../index.php';
        </script>";
    } else {
        session_start();
        try {
            $_SESSION['session_id'] = start($user['id'])['id'];
        } catch (PDOException $e) {
            echo "no se pudo";
        }
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['email'] = $user['email'];
        header("location: http://localhost/hosters/index.php");
    }