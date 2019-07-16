<?php

    include_once '../../model/database.php';

    function startHire($user_id, $site_id){
        $mbd = getConnector();
        $query = $mbd->prepare("INSERT INTO hires(site_id, user_id) 
                                VALUES(
                                    $site_id,
                                    $user_id
                                )");
        $query->execute();
    }

    function closeHire($site_id, $user_id){
        $mbd = getConnector();
        $query = $mbd->prepare("UPDATE hires SET closed = 1 WHERE site_id = $site_id AND user_id = $user_id AND closed = 0");
        $query->execute();
    }
