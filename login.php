<?php
$login = !empty($_POST['login']) ? $_POST['login'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';
$new_url = '/main-page.php';

if ($login === 'admin' && $password === 'admin') {
    header('Location: '.$new_url);
} else { ?>
    <head>
        <title>Результат авторизации</title>
    </head>
    <body>
        <p>
            Неверные данные!
        </p>
        <form action="index.php">
        <button>Назад</button>
        </form>
    </body>
<?php }
?>