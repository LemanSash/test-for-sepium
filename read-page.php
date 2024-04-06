<?php
$dbh = new \PDO('mysql:host=sql101.infinityfree.com;dbname=if0_36314588_test;', 'if0_36314588', 'sxaf3avmWMgHk');
$dbh->exec('SET NAMES UTF8');
$stm = $dbh->prepare('SELECT * FROM `users`');
$stm->execute();
$allUsers = $stm->fetchAll();
?>
<html>
    <head>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    </head>
    <body>
        <table border="1">
            <tr><td>id</td><td>Имя</td><td>Email</td><td>Время создания</td><td>Пароль</td></tr>
            <?php foreach ($allUsers as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <td><?= $user['password'] ?></td>
                    <td><span class="delete" id='<?= $user['id']; ?>'>удалить</span></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <form action="main-page.php">
            <button>Назад</button>
        </form>

        <script type="text/javascript">
            $(document).ready(function(){

            // Delete 
            $('.delete').click(function(){
                var el = this;
        
                // Delete id
                var deleteid = this.id;
        
                var confirmalert = confirm("Are you sure?");
                if (confirmalert == true) {
                    // AJAX Request
                    $.ajax({
                        url: 'delete-page.php',
                        type: 'POST',
                        data: { id:deleteid },
                        success: function(response){

                            if(response == 1){
                            // Remove row from HTML Table
                            $(el).closest('tr').css('background','tomato');
                            $(el).closest('tr').fadeOut(800,function(){
                                $(this).remove();
                            });
                            }else{
                            alert('Invalid ID.');
                            }

                        }
                    });
                }

            });

        });
        </script>

    </body>
</html>