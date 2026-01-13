<?php
require_once('db.php');
require_once('header.php');
$sql = "SELECT * FROM `friends` WHERE `id`=".$_GET['id'];
$result = mysqli_query($mysqli, $sql);
if(mysqli_errno($mysqli)) echo mysqli_error();
$row = mysqli_fetch_assoc($result);
//var_dump($row);
?>


    <div class="label-content">
    <label for="IDfirstname">фамилия</label><br>
    <input type="text" name="fistname" id="IDfirstname" value="<?=$row['first_name'];?>" readonly><br>
    
    <label for="IDname">имя</label><br>
    <input type="text" name="name" id="IDname" value="<?=$row['name'];?>" readonly><br>
    
    <label for="IDlastname">отчество</label><br>
    <input type="text" name="lastname" id="IDlastname" value="<?=$row['last_name'];?>" readonly><br>
    
    <label for="IDphone">номер телефона</label><br>
    <input type="tel" name="phone" id="IDphone" value="<?=$row['phone'];?>" readonly><br>
    
    <label for="IDemail">адресс электронной почки</label><br>
    <input type="email" name="email" id="IDemail" value="<?=$row['email'];?>" readonly><br>
    
    <label for="IDadress">адресс</label><br>
    <textarea name="adress" id="IDadress" cols="30" rows="5" readonly><?=$row['adress'];?></textarea><br>

    <a class="button" href="update.php?id=<?=$row['id'];?>">Изменить друга</a>
    <a class="button" href=".php?id=<?=$row['id'];?>">Удалить друга</a>
    <form action="" method="post">
        <label for="idComment">Оставьте комментарий</label><br>
        <textarea name="comment" id="idComment"></textarea>
        <button  class="button" type="sumbit">Сохранить</button>
    </form>
</div>