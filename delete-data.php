<?php
include "db/conn.php";
if(isset($_GET['deleteID'])){
    $id = $_GET['deleteID'];
    $sql = "DELETE FROM demo where id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Data deleted successfully');
        window.location.href='http://localhost/demo%20delete/edit-data.php';</script>";
    }else{
        echo "<script>alert('Data not deleted');
        window.location.href='http://localhost/demo%20delete/index.php';</script>";
    }
}


?>