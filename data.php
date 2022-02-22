<?php
include('connection.php');
include('consultas.php');

?>


<script>
    window.music = [
    <?php
    $cont_musica = count_music($connection); // Conta quantas músicas tem cadastradas na tabela e armazena nesssa váriavel
    $number = getRandomNumbers($cont_musica, 1, $cont_musica, false, false); //gera um array com num random sem repetição cm o lenght máximo da variavel acima
    for ($i = 0; $i < $cont_musica; $i++) {
        $var = busca_music_id($connection, $number[$i]);
        echo '{
                title: "' . $var['music'] . '",
                artist: "' . $var['artist'] . '",
                cover: "'.$number[$i].'.jpg",
                file: "' . $number[$i] . '.mp3"
        },
        ';
    } ?>
    ];
</script>