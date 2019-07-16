<?php

    include '../../model/user.php';

    /*variables*/
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (create($firstname, $lastname, $email, $password)) {
        echo "SE CREO EL USUARIO!";
    } else {
        echo "NO SE PUDO CREAR!";
    }