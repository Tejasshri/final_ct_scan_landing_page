<?php 
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbname = 'cion_db';
    $dbpass = '0808@#Tejas';
    
    $conn ;
    try {         
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
        $reviews_query = "SELECT * FROM reviews ;";
        $review_result = $conn->query($reviews_query); 
        $faq_sql_query = 'SELECT * FROM faqs; ';
        $services_sql_query = 'SELECT * FROM services; ';
        $faq_result = $conn->query($faq_sql_query);
        $services_result = $conn->query($services_sql_query);              
    } catch (Exception $e) {
        echo 'ohhhhhh error occured';
    }
?>