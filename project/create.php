<?php require('header.php');?>
<form action="query.php" method="post">
    <input type="hidden" name="create">
    <label for="IDfirstname">Введите фамилию</label><br>
    <input type="text" name="fistname" id="IDfirstname"><br>
    
    <label for="IDname">Введите имя</label><br>
    <input type="text" name="name" id="IDname"><br>
    
    <label for="IDlastname">Введите отчество</label><br>
    <input type="text" name="lastname" id="IDlastname"><br>
    
    <label for="IDphone">Введите номер телефона</label><br>
    <input type="tel" name="phone" id="IDphone"><br>
    
    <label for="IDemail">Введите адресс электронной почки</label><br>
    <input type="email" name="email" id="IDemail" ><br>
    
    <label for="IDadress">Введите адресс</label><br>
    <textarea name="adress" id="IDadress" cols="30" rows="5"></textarea>

    <button class="button" type="submit">Создать нового друга</button>
</form>
<?php require('footer.html');?>