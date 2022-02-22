<?php


function valida_login ($connection, $login, $password){ 
    $query_valida = "SELECT * FROM  user WHERE login = '{$login}'  and password =  '{$password}';";   
    $result_valida = mysqli_query ($connection, $query_valida);
    $row = mysqli_num_rows($result_valida);
    return $row;
}

function val_user($connection, $login){

    $query_user = "SELECT * FROM user WHERE login = '{$login}';";   
    $result_user = mysqli_query ($connection, $query_user);
    $row_user = mysqli_fetch_assoc($result_user); 
    $_SESSION['id'] = $row_user['id'];
    $_SESSION['login'] = $row_user['login'];
    $_SESSION['name'] = $row_user['name'];  
    $_SESSION['email'] = $row_user['email'];
    $_SESSION['adress'] = $row_user['adress'];   
    $_SESSION['telephone'] = $row_user['telephone'];   
    $_SESSION['id_playlist'] = $row_user['id_playlist'];   
}

function busca_music_random($connection){

    $quey_playlist = "SELECT m.id, m.music FROM playlist_music pm
    inner join playlist p on pm.id_playlist = p.id
    inner join music m on pm.id_musica = m.id
    where p.id = 1
    order by rand();";
    $result_playlist = mysqli_query($connection, $quey_playlist);
    $result_playlist = mysqli_fetch_assoc($result_playlist);
    return $result_playlist;

}

function busca_music_id($connection, $id_music){

    $quey_playlist = "SELECT m.music, p.name, m.id, m.artist FROM playlist_music pm
    inner join playlist p on pm.id_playlist = p.id
    inner join music m on pm.id_musica = m.id
    where m.id = '{$id_music}';";

    $result_playlist = mysqli_query($connection, $quey_playlist);
    $resultado = mysqli_fetch_assoc($result_playlist);
    
    return $resultado;
    

}
function count_music($connection){

    $quey_playlist = "SELECT m.id FROM playlist_music pm
    inner join playlist p on pm.id_playlist = p.id
    inner join music m on pm.id_musica = m.id;";

    $query_result = mysqli_query($connection, $quey_playlist);
    $query_result_aleat = mysqli_num_rows($query_result);
    
    return $query_result_aleat;

}



function getRandomNumbers($qnt, $min, $max, $repeat = false, $sort = true,

$sort_order = 0){ if ((($max - $min) + 1) >= $qnt) {
$numbers = array();

while (count($numbers) < $qnt) {
$number = mt_rand($min, $max);
if ($repeat) {
$numbers[] = $number;
} elseif (!in_array($number, $numbers)) {
$numbers[] = $number;
}
}
if ($sort) {
switch ($sort_order) {
case 0:
sort($numbers);
break;
case 1:
rsort($numbers);
break;
}
}
return $numbers;
} else {
return 'A faixa de valores entre $min e $max deve ser igual ou superior à ' .
'quantidade de números requisitados'; }}


