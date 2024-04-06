<?php 
include "config.php";

$id = 0;
if(isset($_POST['id'])){
    $id = mysqli_real_escape_string($con,$_POST['id']);
}
if($id > 0){

        // Delete record
        $query = "DELETE FROM users WHERE id=".$id;
        mysqli_query($con,$query);
        echo 1;
        exit;
    }else{
        echo 0;
        exit;
    }


echo 0;
exit;