<html>
<head>
 <title>Добавить пользователя</title>
</head>
<body>
 <form method="POST" action="">
  <input name="name" type="text" placeholder="Имя"/>
  <input name="email" type="text" placeholder="Email"/>
  <input name="password" type="text" placeholder="Пароль"/>
  <input type="submit" value="Отправить"/>
 </form>
 <form action="main-page.php">
    <button>Назад</button>
 </form>
</body>
</html>
<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$db_host = "sql101.infinityfree.com"; 
$db_user = "if0_36314588"; 
$db_password = "sxaf3avmWMgHk";
$db_base = 'if0_36314588_test'; 
$db_table = "users";

try {
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        $db->exec("set names utf8");
        $data = array( 'name' => $name, 'email' => $email, 'password' => $password ); 
        $query = $db->prepare("INSERT INTO $db_table (name, email, password) values (:name, :email, :password)");
        $query->execute($data);
        $result = true;
    } catch (PDOException $e) {
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }

if ($result) {
  echo "Информация занесена в базу данных";
}}
 ?>