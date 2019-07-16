<?php

//
// ──────────────────────────────────────────────────────────────── I ──────────
//   :::::: S E S S I O N M O D E L : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────────────────
//

include_once '../../model/database.php';

//
// ───────────────────────────────────────────────────────────── SESSIONCONTROLS ─────
//

    function start($user_id){
        $mbd = getConnector();
        $query = $mbd->prepare("INSERT INTO sessions(user_id) VALUES(:user_id)");
        $query->bindParam(':user_id', $user_id);
        try {
            $query->execute();
            $session_current = $mbd->prepare("SELECT id, closed FROM sessions WHERE user_id = $user_id AND closed IS NULL");
            $session_current->execute();
            $current = $session_current->fetch();
            return $current;
        } catch (PDOException $e) {
            return false;
        }
    }

    function finish($session_id){
        $mbd = getConnector();
        $query = $mbd->prepare("UPDATE sessions SET closed = true  WHERE id = $session_id");
        try {
            $query->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }