<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:: Área Privada ::..</title>
    <link rel="stylesheet" href="<?= url("themes/app/assets/css/styles.css"); ?>"> <!-- Atualize com o caminho correto do seu arquivo CSS -->
</head>
<body class="private-area">
<nav id="private-navbar">
    <div id="user-greeting">
        <div id="user-photo"></div>
        <span>Olá, Fulano!</span>
    </div>
    <a href="<?= url("/app/perfil"); ?>">Perfil</a>
    <a href="#">Meus Pedidos</a>
    <a href="#">Configurações</a>
    <a href="#">Mensagens</a>
    <a href="#">Suporte</a>
    <a href="#">Sair</a>
</nav>
<div class="content">
    <?php
    echo $this->section("content");
    ?>
</div>
<footer class="private-footer">
    © 2023 Nome da Empresa. Todos os direitos reservados.
</footer>
</body>
</html>