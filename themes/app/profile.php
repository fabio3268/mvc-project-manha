<?php
    echo $this->layout("_theme");
?>

<!-- Formulário para alteração do Perfil do Usuário
  Nome, E-mail, Senha e Foto.
-->

<div class="private-area">
    <h1>Perfil do Usuário</h1>
    <form action="/caminho/para/processar/perfil" method="POST" class="private-area" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
        </div>
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" accept="image/*">
        </div>
        <button type="submit">Atualizar Perfil</button>
    </form>
</div>