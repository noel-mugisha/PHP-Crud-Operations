<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `crud` where id = $id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql = "UPDATE `crud` SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result= mysqli_query($con,$sql);

    if($result){
        header('location: display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <a href="display.php">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="return">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </a>
    <div class="container">
       
        <h2>Update user</h2>
        <form method="post">
            <label for="name" value="">Name</label>
            <input type="text" name="name" id="name" value="<?php
            echo $name;
            ?>">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php
            echo $email;
            ?>">
            <label for="mobile">Tel</label>
            <input type="text" name="mobile" id="mobile" value="<?php
            echo $mobile;
            ?>">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?php
            echo $password;
            ?>">
            <button type="submit" name="submit">Update</button>
        </form>
    </div>

</body>
</html>