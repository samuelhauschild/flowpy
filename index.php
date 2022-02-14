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
                <div class="album-foto" style="background-image: url(img/foto.jpg)"></div>
                <?php
            $resultado = aleatorio_musica($connection, 1);       
            $result_musicas = busca_music_id($connection, $resultado);
            $result_music_lines = mysqli_num_rows($result_musicas);
            $row_music = mysqli_fetch_assoc($result_musicas); ?>
                <h2><?php echo $resultado, " - ".$row_music['music']; ?></h2>
            
                <audio controls autoplay>
                    <source src="./musicas/<?php echo $resultado. ".mp3" ?>" type="audio/mpeg">
                </audio>
            </div>
        </div>
    </div>
</body>

</html>