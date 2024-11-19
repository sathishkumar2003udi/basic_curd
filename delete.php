<?php
include('db.php');
$id=$_GET['id'];
$sql="delete from crud where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
    // echo "Deleted Successfully";
    header('location:display.php');
}else{
    die(mysqli_error($conn));
}
?>