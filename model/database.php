<?php 

    function getConnector(){
        try {
            $mbd = new PDO('mysql:host=localhost;dbname=hosters', 'root', '');
            return $mbd;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            return null;
        }
    }
