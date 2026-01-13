<?php require('header.php');?>
<form action="query.php" method="post">
    <input type="hidden" name="signin">
    
    <label for="IDname">email</label><br>
    <input type="text" name="email" id="IDemail"><br>

    <label for="IDpassword">Пароль</label><br>
    <input type="text" name="password" id="IDpassword"><br>

    <button class="button" type="submit">Войти</button>
</form>
<?php require('footer.html');?>