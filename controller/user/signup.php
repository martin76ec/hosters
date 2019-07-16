<?php

    include '../../model/user.php';

    /*variables*/
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (create($firstname, $lastname, $email, $password)) {
        echo "<script>alert('Usuario creado correctamente');
        window.location.href='../../index.php';
        </script>";
    } else {
        echo "<script>alert('No se puede crear el usuario');
        window.location.href='../../index.php';
        </script>";
    }