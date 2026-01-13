<?php require('db.php');?>
<?php require('header.php');?>
<?php
    $sql = 'SELECT * FROM `friends`';
$result = mysqli_query($mysqli, $sql);
if(mysqli_errno($mysqli)) echo mysqli_error();

?>
            <table>
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Фамилия</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Телефон</th>
                        <th>Email</th>
                        <th>Адрес</th>
                    </tr>
                </thead>
                <?php $i = 0;?>
                <?php while($row = mysqli_fetch_assoc($result)):?>
                <tr>
                    <th><?php echo $i++;?></th>
                    <th><a href="card.php?id=<?=$row['id'];?>"><?php echo $row['first_name'];?></a></th>
                    <th><?php echo $row['name'];?></th>
                    <th><?php echo $row['last_name'];?></th>
                    <th><?php echo $row['phone'];?></th>
                    <th><?php echo $row['email'];?></th>
                    <th><?php echo $row['adress'];?></th>
                </tr>
                <?php endwhile;?>
            </table>
        </div>
<?php require('footer.html');?>