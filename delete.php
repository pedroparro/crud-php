<?php
include("./config.php");

    global $pdo;
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = $pdo->prepare("DELETE FROM `crud_php` WHERE id='$id'");
        $sql->execute();
        header("Location: ./index.php");
        die();
    }else{
        header("Location: ./index.php");
        die();
    }

?>