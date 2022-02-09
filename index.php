<?php
include ('ver_login.php');
?>

<html>
<head>
<meta charset="UTF-8"/>
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
                        <span>Olá, <?php echo $_SESSION['name']?></span>
                        <div class="dropdown">
                            <ul>
                                <li><a href="">Minha conta</a></li>
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
                    <h2>The Wall</h2>
                    <span>Pink Floyd</span>
                    <audio controls autoplay>
                        <source src="musicas/pinkfloy.mp3" type="audio/mpeg"> 
                    </audio>
                </div>
            </div>
    </div>
</body>
</html>