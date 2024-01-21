<?php
$serverName =  
$userName =  
$userPassword =  
$dbname =  

try {



  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



} catch (PDOException $e) {
  echo "Sorry! You cannot connect to database";
}
