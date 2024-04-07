<?php
session_start();

$login = !empty($_POST['login']) ? $_POST['login'] : '';
$password = !empty($_POST['password']) ? $_POST['password'] : '';
$new_url = '/main-page.php';

if ($login === 'admin' && $password === 'admin') {
    $_SESSION['name'] = $login;
    header('Location: '.$new_url);
    exit;
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