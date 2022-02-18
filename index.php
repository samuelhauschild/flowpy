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

    <link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .index-music {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .index-music .left {
            width: calc(50% - 15px);
        }

        .index-music .right {
            width: calc(50% - 15px);
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
                    <div class="left">
                        <div class="album-foto" style="background-image: url(img/foto.jpg)"></div>
                        <audio controls autoplay>
                            <source src="./musicas/<?php echo $resultado . ".mp3" ?>" type="audio/mpeg">
                        </audio>
                        <?php
                        $cont_musica = count_music($connection);
                        echo $cont_musica;
                        ?>

                    </div>
                    <div class="right">
                        <div style="background-color: white;">
                            <?php
                            $number = getRandomNumbers($cont_musica, 1, $cont_musica, false, false);
                            print_r($number);

                            ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</body>

</html>