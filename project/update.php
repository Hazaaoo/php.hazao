<?php
require_once('db.php');
require_once('header.php');
$sql = "SELECT * FROM `friends` WHERE `id`=".$_GET['id'];
$result = mysqli_query($mysqli, $sql);
if(mysqli_errno($mysqli)) echo mysqli_error();
$row = mysqli_fetch_assoc($result);
//var_dump($row);
?>

<form action="query.php" method="post">
    <input type="hidden" name="update">
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <div class="label-content">
    <label for="IDfirstname">фамилия</label><br>
    <input type="text" name="fistname" id="IDfirstname" value="<?=$row['first_name'];?>"><br>
    
    <label for="IDname">имя</label><br>
    <input type="text" name="name" id="IDname" value="<?=$row['name'];?>"><br>
    
    <label for="IDlastname">отчество</label><br>
    <input type="text" name="lastname" id="IDlastname" value="<?=$row['last_name'];?>"><br>
    
    <label for="IDphone">номер телефона</label><br>
    <input type="tel" name="phone" id="IDphone" value="<?=$row['phone'];?>"><br>
    
    <label for="IDemail">адресс электронной почки</label><br>
    <input type="email" name="email" id="IDemail" value="<?=$row['email'];?>"><br>
    
    <label for="IDadress">адресс</label><br>
    <textarea name="adress" id="IDadress" cols="30" rows="5"><?=$row['adress'];?></textarea><br>
    <button  class="button" type="submit">Изменить</button>
</form>
