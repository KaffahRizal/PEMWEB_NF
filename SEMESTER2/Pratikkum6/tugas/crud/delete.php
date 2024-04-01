<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `tugas6` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msg=Record deleted successfully");
}
else{
    echo "FAILED: " . mysqli_error($conn);
}
?>