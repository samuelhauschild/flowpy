<?php
include ('connection.php');


//VALIDA SE CAMPOS FOREM NULOS
if(empty($_POST['name']) || empty($_POST['adress']) || empty($_POST['email']) || empty($_POST['telephone']) || empty($_POST['login']) || empty($_POST['password']) || empty($_POST['cpf'])){
  echo"<script language='javascript' type='text/javascript'>
  alert('TODOS OS CAMPOS DEVEM SER PREENCHIDOS');window.location.
  href='cadastro.html'</script>"; 

  exit;
}

//VALIDAÇÃO PARA EVITAR SQL INJECTION
$name = strip_tags(mysqli_real_escape_string($connection ,$_POST['name']));
$adress = mysqli_real_escape_string($connection ,$_POST['adress']);
$email = mysqli_real_escape_string($connection ,$_POST['email']);
$telephone = mysqli_real_escape_string($connection ,$_POST['telephone']);
$login = mysqli_real_escape_string($connection ,$_POST['login']);
$password = mysqli_real_escape_string($connection ,$_POST['password']);
$cpf = mysqli_real_escape_string($connection ,$_POST['cpf']);


$query_insert = "INSERT INTO id18425492_flowpy.user (name, password, email, cpf, adress, telephone, login) VALUES ('$name','$password', '$email', '$cpf', '$adress', '$telephone', '$login');";
$result = mysqli_query ($connection, $query_insert);

if(mysqli_affected_rows($connection) != 0){
  $_SESSION['name'] = $name;
  echo"<script language='javascript' type='text/javascript'>
   alert('CADASTRO EFETUADO COM SUCESSO');window.location.
   href='login.html'</script>"; 
  exit;   
  
}else{
 echo"<script language='javascript' type='text/javascript'>
  alert('PROBLEMA NO CADASTRO');window.location.
  href='index.php'</script>"; 
 exit; 
};

?>