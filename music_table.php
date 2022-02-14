<?php
include('connection.php');
include('ver_login.php');
include('consultas.php');

?>
<html>

<head>
    <title>Flowpy</title>
    <style>
        .tabela {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .tabela .left {
            width: calc(50% - 15px);
        }

        .tabela .left .item {
            height: 40px;
            display: flex;
            flex-direction: row;
            align-items: center;
            border-bottom: 1px solid #ddd;
            border-top: 1px solid #ddd;
        }

        .tabela .right {
            width: calc(50% - 15px);
        }

        .tabela .right .item {
            height: 40px;
            display: flex;
            flex-direction: row;
            align-items: center;
            border-bottom: 1px solid #ddd;
            border-top: 1px solid #ddd;
        }
    </style>
</head>

<body>



    <div class="tabela">
        <div class="left">

        </div>
        <div class="right">
            <h2>Playlist</h2>
            <?php
            $result_musicas = busca_music_playlist($connection, $_SESSION['login']);
            $result_music_lines = mysqli_num_rows($result_musicas);
            $row_music = mysqli_fetch_assoc($result_musicas);
            ?>
            <div class="item"><?php echo $row_music['name']; ?></div>
          
        </div>
        <div class="right">
            <h2>Música</h2>
            <?php
            $resultado = aleatorio_musica($connection, 1);       
            $result_musicas = busca_music_id($connection, $resultado);
            $result_music_lines = mysqli_num_rows($result_musicas);
            for ($i = 0; $i < $result_music_lines; $i++) {
                $row_music = mysqli_fetch_assoc($result_musicas); ?>
                <div class="item"><?php echo $resultado, " - ".$row_music['music']; ?></div>
            <?php
            }
            ?>

        </div>
    </div>


</body>

</html>