<?php

//
// ────────────────────────────────────────────────────────── I ──────────
//   :::::: S I T E M O D E L : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────────────
//

include '../../model/database.php';

//
// ─────────────────────────────────────────────────────────────────── CREATE ─────
//
    function addSite($title, $description, $user_id, $price, $food, $image){
        $mbd = getConnector();
        $query = $mbd->prepare("INSERT INTO sites(title, description, user_id, priceperday, food, image)
                                VALUES(
                                    '$title',
                                    '$description',
                                     $user_id,
                                     $price,
                                     $food,
                                    '$image'
                                )
                                ");
        $query->execute();
    }

    function addSiteImage($site_id, $link){
        $mbd = getConnector();
        $query = $mbd->prepare("INSERT INTO `site_images`(`id`, `link`) 
        VALUES (':site_id',
                ':link')");
        $query->bindParam(':site_id', $site_id);
        $query->bindParam(':link', $link);
        try {
            $query->execute();
        } catch (PDOException $e) {
            //ERROR GOES HERE;
        }
        $query->execute();
    }

    
// ────────────────────────────────────────────────────────────────────────────────

