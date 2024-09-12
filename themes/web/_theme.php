<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Meu Sistema ::..</title>
    <link rel="stylesheet" href="<?= url("assets/css/web/styles.css"); ?>">
    <script type="module" src="<?= url("assets/js/web/theme.js"); ?>" async></script>
<?php if ($this->section("specific-script")): ?>
    <?= $this->section("specific-script"); ?>
<?php endif; ?>
</head>
<body>
<nav id="navbar">
    <a href="<?= url();?>">Home</a>
    <a href="<?= url("sobre"); ?>">Sobre</a>
    <a href="<?= url("contato"); ?>">Contato</a>
    <a href="<?= url("localizacao"); ?>">Localização</a>
    <a href="<?= url("faqs"); ?>">FAQs</a>
    <a href="<?= url("login"); ?>">Entrar</a>
</nav>
<div class="content">
    <!-- Your content goes here -->
    <?php
        echo $this->section("content");
    ?>
</div>
<footer>
    <p>© 2024 Meu Sistema. Todos os direitos reservados.</p>
</footer>
</body>
</html>