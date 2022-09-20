<?php 
session_start();     
    $con=mysqli_connect("localhost","root");
    mysqli_select_db($con,'php_connection'); 
      
    //$con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  