<?php
include "connect_db.php";
$ressourcesID = $_GET['ressourcesID'];
$sql = "DELETE FROM `ressources`WHERE ressourcesID=$ressourcesID";
$result = mysqli_query($conn ,$sql);

if($result){
    header("Location: display1.php? mgs=Record deleted successfully");
}
else {
    echo "failed:" .mysqli_error($conn);
}
?>