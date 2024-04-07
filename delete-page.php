<?php 
include "config.php";

$id = 0;

if(isset($_POST['id'])){
    $id = mysqli_real_escape_string($con,$_POST['id']);
}

if($id > 0){
        $query = "DELETE FROM users WHERE id=".$id;
        mysqli_query($con,$query);
        
        $output = "";


        $sql = "SELECT * FROM users";
        $allUsers = mysqli_query($con, $sql);

        $output .= "
            <table border='1'>
            <tr>
            <td>id</td>
            <td>Имя</td>
            <td>Email</td>
            <td>Время создания</td>
            <td>Пароль</td>
            </tr>";

        if (mysqli_num_rows($allUsers) > 0) {
            while ($user = mysqli_fetch_array($allUsers)){
               
                $output .= "
                    <tr>
                        <td>".$user['id']."</td>
                        <td>".$user['name']."</td>
                        <td>".$user['email']."</td>
                        <td>".$user['created_at']."</td>
                        <td>".$user['password']."</td>
                        <td><span class='delete' id='".$user['id']."'>удалить</span></td>
                    </tr>";
            }
        }
        $output .= "</table>";

        echo $output;
        exit;
    }else{
        echo 0;
        exit;
    }


echo 0;
exit;