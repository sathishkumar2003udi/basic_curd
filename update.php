<?php
include("db.php");

$id=$_GET['id'];
$sql="select * from crud where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" autocomplete="off">    
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" autocomplete="off">    
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Mobile</label>
                <input type="number" class="form-control" name="mobile" value="<?php echo $row['mobile'];?>" autocomplete="off">    
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $row['password'];?>" autocomplete="off">    
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
$id=$_GET['id'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update crud set id=$id,name='$name',email='$email',mobile=$mobile,password='$password' where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>