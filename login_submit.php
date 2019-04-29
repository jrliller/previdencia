<?php
session_start();
include 'pensioner.class.php';
$pensioner = new Pensioner();

if(isset($_POST['user'])){
    $user = addslashes($_POST['user']);
    $senha = addslashes($_POST['senha']);
    $pensioner->loginUser($user, $senha);
    header("Location: index.php");
}
?>