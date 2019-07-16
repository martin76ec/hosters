<?php

//
// ──────────────────────────────────────────────────────────── I ──────────
//   :::::: E R R O R M O D E L : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────────────
//

include_once '../../model/database.php';

//
// ──────────────────────────────────────────────────────────── ERRORACTIVITY ─────
//

    function registerError($type, $session_id){
        $mbd = getConnector();
        $query = $mbd->prepare("INSERT INTO errors(type, session_id) VALUES(:type, :session_id)");
        $query->bindParam(':type', $type);
        $query->bindParam(':session_id', $session_id);
        $query->execute();
    }