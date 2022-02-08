<?php
session_start();
include ('connection.php');
include ('consultas.php');

if(empty($_POST['login']) || empty($_POST['password'])){
  header('Location: index.html');
  exit();
}
//VALIDAÇÃO PARA EVITAR SQL INJECTION
$login = mysqli_real_escape_string($connection ,$_POST['login']);
$password = mysqli_real_escape_string($connection ,$_POST['password']);

$row = valida_login($connection, $login, $password);

    if($row == 1){
    val_user($connection, $login);
    echo"<script language='javascript' type='text/javascript'>
    window.location.
    href='index.php'</script>"; 
    exit;

    } else {
    echo"<script language='javascript' type='text/javascript'>
    alert('ERRO AO EFETUAR LOGIN');window.location.
    href='login.html'</script>"; 

    exit;

    }

?>