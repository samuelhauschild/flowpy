<?php
        session_start();
        if(!$_SESSION['login']){
        header ('Location: login.html');
        exit;
        };
?>