<?php session_start();
require('db.php');?>
<?php
    if(isset($_POST['create'])){
            $sql = "INSERT INTO `friends`(`first_name`, `name`, `last_name`, `email`, `phone`, `adress`, `user_id`) VALUES (
            '".$_POST['fistname']."',
            '".$_POST['name']."',
            '".$_POST['lastname']."',
            '".$_POST['email']."',
            '".$_POST['phone']."',
            '".$_POST['adress']."',
            '".$_SESSION['iduser']."')";
        $result = mysqli_query($mysqli, $sql);
        if(mysqli_errno($mysqli)) echo mysqli_error();
    header("Location:http://localhost/Vasiliev/project/content.php");
}
else if(isset($_POST['register'])){
    $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES (
    '".$_POST['login']."',
    '".$_POST['email']."',
    PASSWORD('".$_POST['password']."'))";
    $result = mysqli_query($mysqli, $sql);  
    if(mysqli_errno($mysqli)) echo mysqli_error();
    header("Location:http://localhost/Vasiliev/project/content.php");
}
if(isset($_POST['signin'])){
    $sql = "SELECT * FROM `users` WHERE `email` = '".$_POST['email']."' AND  `password` = PASSWORD('".$_POST['password']."')";
    $result = mysqli_query($mysqli, $sql);  
    if(mysqli_errno($mysqli)) echo mysqli_error();
    $row = mysqli_fetch_assoc($result);
    if($row > 0){
        $_SESSION['iduser'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        header("Location:http://localhost/Vasiliev/project/content.php"); 
    }
    else{
        header("Location:http://localhost/Vasiliev/project/signin.php");
    }
}
if (isset($_POST['update'])){
    $sql = "UPDATE `friends` SET
            `first_name`='".$_POST['fistname']."',
            `name`='".$_POST['name']."',
            `last_name`='".$_POST['lastname']."',
            `email`='".$_POST['email']."',
            `phone`='".$_POST['phone']."',
            `adress`='".$_POST['adress']."' WHERE `id`=".$_POST['id'];
    $result = mysqli_query($mysqli,$sql);
    if (mysqli_errno($mysqli)) echo mysqli_error();
    header ('Location:http://localhost/Vasiliev/project/content.php');
}
if (isset($_GET['id'])){
    $sql =  "DELETE FROM `friends` WHERE `id`=".$_GET['id'];
    $result = mysqli_query($mysqli,$sql);
    if (mysqli_errno($mysqli)) echo mysqli_error();
    header ("Location:http://localhost/Vasiliev/project/content.php");
}
if (isset($_GET['role'])){
    $sql =  "UPDATE `users` SET `role`='reader' WHERE `id`=".$_GET['role'];"";
    $result = mysqli_query($mysqli,$sql);
    if (mysqli_errno($mysqli)) echo mysqli_error();
    header ("Location:http://localhost/Vasiliev/project/admin.php");
}
?>  