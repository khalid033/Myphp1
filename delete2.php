<?php
include "connect_db.php";
$category_ID = $_GET['category_ID'];
$sql = "DELETE FROM `category` WHERE category_ID=$category_ID";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: category.php?mgs=Record deleted successfully");
} else {
    echo "failed: " . mysqli_error($conn);
}
?>
