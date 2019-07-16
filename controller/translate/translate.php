<?php

    function getLanguage($language, $text){
        $mbd = new PDO('mysql:host=localhost;dbname=' . 'hosters', 'root',
        '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
        $mbd->exec("SET CHARACTER SET UTF8");
        $query = $mbd->prepare("SELECT $language FROM translations WHERE id = '$text'");
        try {
            $query->execute();
            $translated = $query->fetchAll();
            echo ($translated[0][0]);
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }