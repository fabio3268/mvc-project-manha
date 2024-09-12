<?php
    echo $this->layout("_theme");
?>
<?php
  $this->start("specific-script");
?>
<script type="module" src="<?= url("assets/js/web/login.js"); ?>" async></script>
<?php
$this->end();
?>


<form id="formRegister">
    <label>
        <span>Nome:</span>
        <input type="text" name="name" value="Fábio Santos">
    </label>
    <label>
        <span>Email:</span>
        <input type="email" name="email" value="fabiosantos@ifsul.edu.br">
    </label>
    <label>
        <span>Senha:</span>
        <input type="password" name="password" value="1234567">
    </label>
    <button>Cadastrar</button>
</form>

<!--Formulário de login-->

<form id="formLogin">
    <label>
        <span>Email:</span>
        <input type="email" name="email" value="fabiosantos@ifsul.edu.br">
    </label>
    <label>
        <span>Senha:</span>
        <input type="password" name="password" value="12345678">
    </label>
    <button>Entrar</button>
</form>

<section>
    <button id="getByCategory">Teste Requisição Autenticada com Token</button>
</section>
<!--Formulário de cadastro-->

<section>
    <button id="getEventsMocitec">Teste de API externa sem autenticação (token)</button>
</section>