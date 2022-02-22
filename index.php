<?php
include('connection.php');
include('ver_login.php');
include('data.php');
?>

<html>

<head>
    <meta charset="UTF-8" />
    <title>Flowpy</title>
    <link rel="stylesheet" href="css/nextx.css">
    <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@400;700&display=swap" rel="stylesheet">
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
                <div class="album-foto" style="background-size: contain;"><img style="background-size: contain;"></div>
                <h2 class="title-music">MÚSICA</h2>
                <H3 class="title-artist">Artista</H3>
                <audio src="" controls id="audioPlayer" autoplay>Sorry, your browser doesn't support html5!</audio>


            </div>

        </div>
    </div>

</body>
<script src="js/player.js"></script>
<script src="js/consultas.js"></script>
</html>