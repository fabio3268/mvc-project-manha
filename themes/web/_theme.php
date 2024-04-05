<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>..:: Meu Sistema ::..</title>
    <link rel="stylesheet" href="themes/web/assets/css/styles.css">
    <script src="themes/web/assets/js/scripts.js"></script>
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