<?php
    echo $this->layout("_theme");
?>
<?php
$this->start("specific-script");
?>
<script type="module" src="<?= url("assets/js/app/profile.js"); ?>"></script>
<?php
$this->end();
?>

<!-- Formulário para alteração do Perfil do Usuário
  Nome, E-mail, Senha e Foto.
-->

<div class="private-area">
    <h1>Perfil do Usuário</h1>
    <form class="private-area" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" id="address" name="address">
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" id="photo" name="photo" accept="image/*">
        </div>
        <button type="submit">Atualizar Perfil</button>
    </form>
</div>