<?php
    session_start();
    session_unset(); 
    session_destroy(); 
    header('location: https://joaovictoralvesteste.000webhostapp.com/');
    exit;
?>