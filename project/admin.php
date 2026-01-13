<?php require('db.php');?>
<?php require('header.php');?>
<?php
    $sql = 'SELECT * FROM `users`';
$result = mysqli_query($mysqli, $sql);
if(mysqli_errno($mysqli)) echo mysqli_error();

?>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Login</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Присвоить роль читателя</th>
                    </tr>
                </thead>
                <?php while($row = mysqli_fetch_assoc($result)):?>
                <tr>
                    <th><?php echo $row['id'];?></a></th>
                    <th><?php echo $row['name'];?></th>
                    <th><?php echo $row['email'];?></th>
                    <th><?php echo $row['role'];?></th>
                    <th>><a class="admin-button rubik-mono-one-regular" href="query.php?role=<?=$row['id'];?>">Присвоить</a><</th>
                </tr>
                <?php endwhile;?>
            </table>
        </div>
<?php require('footer.html');?>