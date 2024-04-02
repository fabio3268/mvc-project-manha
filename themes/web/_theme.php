<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Meu Sistema ::..</title>
    <link rel="stylesheet" href="themes/web/assets/css/styles.css">
    <script src="themes/web/assets/js/scripts.js"></script>
</head>
<body>
<nav id="navbar">
    <a href="#home">Home</a>
    <a href="#about">Sobre</a>
    <a href="#contact">Contato</a>
    <a href="#contact">Localização</a>
    <a href="#contact">Carrinho</a>
</nav>

<div id="content">
    <!-- Your content goes here -->
    <?php
        echo $this->section("content");
    ?>
</div>

<footer>
    <p>© 2023 Meu Sistema. All rights reserved.</p>
</footer>

</body>
</html>