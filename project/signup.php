<?php require('header.php');?>
<form action="query.php" method="post">
    <input type="hidden" name="register">
    
    <label for="IDname">Логин</label><br>
    <input type="text" name="login" id="IDname"><br>
    
    <label for="IDemail">Email</label><br>
    <input type="email" name="email" id="IDemail"><br>

    <label for="IDpassword">Пароль</label><br>
    <input type="text" name="password" id="IDpassword"><br>

    <button class="button" type="submit">Зарегистрироваться</button>
</form>
<?php require('footer.html');?>