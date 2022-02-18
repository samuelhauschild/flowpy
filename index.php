<?php
include('ver_login.php');
include('consultas.php');
include('connection.php');
?>

<html>

<head>
    <meta charset="UTF-8" />
    <title>Flowpy</title>
    <link rel="stylesheet" href="css/nextx.css">
    <script src="js/consultas.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="audioPlayer.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@400;700&display=swap" rel="stylesheet">
    <style>
        ul li {

        }
    </style>
</head>

<body>
    <div class="conteudo">
        <header>
            <div class="container">
                <div class="header-items">
                    <h2>Flowpy</h2>
                    <div class="logado">
                        <div class="profile-pic" style="background-image: url('img/sem-foto.jpg')"></div>
                        <span>Olá, <?php echo $_SESSION['name'] ?></span>
                        <div class="dropdown">
                            <ul>
                                <li><a href="index.php">Minha conta</a></li>
                                <li><a href="./logout.php">Sair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="player">
            <div class="container">
                <div class="index-music">
                    <div class="album-foto" style="background-image: url(img/foto.jpg)"></div>

                    <!-- PLAYLIST DE MÚSICAS SEM REPETIR COM TAMANHO ATRÁVES DE SELECT DO BD-->

                    <audio src="" controls id="audioPlayer">
                        Sorry, your browser doesn't support html5!
                    </audio>
                    <ul id="playlist">
                        <?php
                        $cont_musica = count_music($connection); // Conta quantas músicas tem cadastradas na tabela e armazena nesssa váriavel
                        $number = getRandomNumbers($cont_musica, 1, $cont_musica, false, false); //gera um array com num random sem repetição cm o lenght máximo da variavel acima
                        for ($i = 0; $i < $cont_musica; $i++) {
                            $var = busca_music_id($connection, $number[$i]);
                            echo '<li class="current-song"><a href="./musicas/' . $number[$i] . '.mp3">Musica '.$var['music'] .'</a></li>';
                            
                        }

                        ?>
                    </ul>

                    <script>
                        // loads the audio player
                        audioPlayer();
                    </script>



                </div>

            </div>

        </div>
    </div>
</body>


</html>