<?php

    session_start();
    $_SESSION['language'] = $_GET['language'];

    header('location: http://localhost/hosters');