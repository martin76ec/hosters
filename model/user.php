<?php

//
// ────────────────────────────────────────────────────────── I ──────────
//   :::::: U S E R M O D E L : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────────────
//

include '../../model/database.php';

//
// ─────────────────────────────────────────────────────────────────── SELECT ─────
//

    function selectAll(){
        $mbd = getConnector();
        $query = $mbd->prepare("SELECT * FROM users");
        $query->execute();
        $user = $query->fetchAll();
        return $user;
    }

    function userExists($email, $password){
        $mbd = getConnector();
        $query = $mbd->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->execute();
        $user = $query->fetch();
        if (empty($user)) {
            return false;
        } else {
            return $user;
        }
    }

// ────────────────────────────────────────────────────────────────────────────────

//
// ─────────────────────────────────────────────────────────────────── CREATE ─────
//

    function create($firstname, $lastname, $email, $password){
        $mbd = getConnector();
        $query = $mbd->prepare("INSERT users(firstname, lastname, email, password) 
         VALUES('$firstname', 
                '$lastname',
                '$email',
                '$password')
        ");
        
        try {
            $query->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

// ────────────────────────────────────────────────────────────────────────────────

//
// ─────────────────────────────────────────────────────────────────── UPDATE ─────
//

    function update($userData){
        $mbd = getConnector();
        $query = $mbd->prepare("UPDATE users WHERE id = :id SET
         firstname = ':firstname',
         lastname = ':lastname',
         email = ':email',
         password = ':password' 
        ");
        
        foreach($userData as $data => $value){
            $query->bindParam($data, $value);
        }

        try {
            echo "$data = $value <br>";
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

// ────────────────────────────────────────────────────────────────────────────────
