<?php

require('______________');


$sql = "delete from customer where CustomerID = :customerID";
$stml = $conn->prepare($sql);
$stml->bindParam(':customerID',$_GET['CustomerID']);
 echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';
    
if($stml->execute()){
   // $message = "Successfully delete customer".$_GET['CustomerID'].".";
           echo '
        <script type="text/javascript">
        
 




        
        
        </script>
        ';


}else{
    $message = "Fail to delete customer information.";
}

$conn = null;

//header("Location:index.php");

?>


