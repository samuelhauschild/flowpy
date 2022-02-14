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
    $_SESSION['id_playlist'] = $row_user['playlist'];   
}

function busca_music_playlist($connection, $login){

    $quey_playlist = "SELECT * FROM playlist_music pm
    inner join playlist p on pm.id_playlist = p.id
    inner join music m on pm.id_musica = m.id
    where p.id = 1;";

    $result_playlist = mysqli_query($connection, $quey_playlist);

    return $result_playlist;

}

function busca_music_id($connection, $id_music){

    $quey_playlist = "SELECT * FROM playlist_music pm
    inner join playlist p on pm.id_playlist = p.id
    inner join music m on pm.id_musica = m.id
    where m.id = '{$id_music}';";

    $result_playlist = mysqli_query($connection, $quey_playlist);

    return $result_playlist;

}

function aleatorio_musica($connection,$id_playlist){
    $query_playlist = "SELECT * FROM playlist_music pm
    inner join playlist p on pm.id_playlist = p.id
    inner join music m on pm.id_musica = m.id
    where p.id = '{$id_playlist}'
    order by rand();";

    $result_musicas = mysqli_query($connection, $query_playlist);
    $row_music = mysqli_num_rows($result_musicas);

    $rand_musica = rand($min = 1, $max = $row_music);

    return $rand_musica;

}
/*
function busca_playlist_user($connection, $login){
    $query_user_playlist = "SELECT id_playlist FROM user WHERE login = '{$login}';";
    $result_user_playlist = mysqli_query($connection, $query_user_playlist);
    $row_user_playlist = mysqli_fetch_assoc($result_user_playlist);
    return $row_user_playlist;
}


function valida_email ($connection, $email){
    $query_valida = "SELECT * FROM account WHERE email = '{$email}';";
    $result_valida = mysqli_query ($connection, $query_valida);
    $row = mysqli_num_rows($result_valida);
    return $row;
}

function valores_user ($connection, $user){
    $query_valida = "SELECT * FROM users WHERE user = '{$user}'";
    $result_valida = mysqli_query ($connection, $query_valida);
    return $result_valida;
}
function system_account($connection, $id_account){
    $query_system = "SELECT sys.id, sys.name
    FROM projeto_music.account p
    inner join projeto_music.account_vs_system pvs on pvs.id_account = p.id
    inner join projeto_music.system sys on pvs.id_system = sys.id
    where p.id = '{$id_account}'"; 
    $result_system = mysqli_query ($connection, $query_system);
    return $result_system;
}

*/


/* !!!!!!!! @@@@@@ Locução de mensagem de texto para voz @@@@@@ !!!!!!!!!!!! */


?>