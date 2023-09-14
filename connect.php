<?php
    
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = '';

    $con = mysqli_connect($host, $user, $password, $db);

    if(!$con){
        echo 'connection failed!';
    }else{
        echo 'connection successful!';
    }    

?>