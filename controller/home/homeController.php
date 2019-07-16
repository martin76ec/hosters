<?php
    if(session_id() == ''){
        $_SESSION['language'] = 'spanish';
    }
    
    if(!isset($_GET['page'])){
        session_start();
        showHome();
    }

    if(isset($_GET['page']) && $_GET['page'] == "myhosts"){
        session_start();
        showHosts();
    }

    if(isset($_GET['page']) && $_GET['page'] == "myhires"){
        session_start();
        showHires();
    }

    function showHome(){
        include 'controller/translate/translate.php';
        include 'view/layout/header.php';
        include 'view/layout/navbar.php';
        if(isset($_SESSION['user_id'])){
            include 'controller/host/listMyHosts.php';
            include 'view/catalogue.php';
            include 'view/layout/signout_modal.php';
        } else {
            include 'view/layout/signin_modal.php';
            include 'view/layout/signup_modal.php';
        }
        include 'view/layout/footer.php';
    }

    function showHosts(){
        include 'controller/translate/translate.php';
        include 'controller/host/listMyHosts.php';
        include 'view/layout/header.php';
        include 'view/layout/navbar.php';
        include 'view/myrents.php';
        include 'view/layout/add_host_modal.php';
        include 'view/layout/signout_modal.php';
        include 'view/layout/footer.php';
    }

    
    function showHires(){
        include 'controller/translate/translate.php';
        include 'controller/host/listMyHosts.php';
        include 'view/layout/header.php';
        include 'view/layout/navbar.php';
        include 'view/myrenteds.php';
        include 'view/layout/add_host_modal.php';
        include 'view/layout/signout_modal.php';
        include 'view/layout/footer.php';
    }