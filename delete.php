<?php
include "connect_db.php";
$userID = $_GET['userID'];
$sql = "DELETE FROM `utilisateurx`WHERE userID=$userID";
$result = mysqli_query($conn ,$sql);

if($result){
    header("Location: index.php? mgs=Record deleted successfully");
}
else {
    echo "failed:" .mysqli_error($conn);
}
?>