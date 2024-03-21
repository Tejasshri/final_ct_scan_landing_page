<?php 
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbname = 'cion_db';
    $dbpass = '0808@#Tejas';
    
    $conn ;
    try {         
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);  
              
    } catch (Exception $e) {
        echo 'ohhhhhh error occured';
    }
?>