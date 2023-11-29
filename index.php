<?php

require_once('controllers/homepage.php');

try{
    if(isset($_SESSION['connect']) && $_SESSION['connect'] !== ''){
        $modification = 'true';
        homepage();
    }else{
        homepage();
    }
}catch(Exception $e){
    echo 'ERREUR : ' .$e->getMessage();
}