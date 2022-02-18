
<?php
include ('consultas.php');
include('connection.php');

$var = busca_music_id($connection, 2)   ;
echo $var['music'];

?>
