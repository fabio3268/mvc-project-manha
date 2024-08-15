# Estrutura Básica de um Projeto MVC
## Turma: INF-3AM

### Banco de Dados
Tem um dump na pasta `db` com o nome `db-inf-3am.sql` que pode ser importado no MySQL.
O nome do banco também é `db-inf-3am`.

### Congig.php
O arquivo `Config.php` deve ser alterado nas constantes necessárias para rodar no ambiente de desenvolvimento:

```php
const CONF_DB_HOST = "mysql";
const CONF_DB_USER = "root";
const CONF_DB_PASS = "asdf1234";
// aqui deve ser alterado para o nome do banco de dados
const CONF_DB_NAME = "db-inf-3am";
const CONF_URL_TEST = "http://localhost:8080/mvc-project-manha";
const CONF_URL_BASE = "http://localhost:8080/mvc-project-manha";
```
### Usuáirios cadastrados para testes

Nome: Fábio Santos IFSUL
Email: fabiosantos@ifsul.edu.br
Senha: 12345678

Nome: Fábio Santos GMAIL
Email: fabio3268@gmail.com
Senha: 12345678

Obs.: A senha é a mesma para ambos os usuários e novos usuários podem ser cadastrados.

### Testar as requisições com autenticação
Acessar `http://localhost:8080/mvc-project-manha/login`
Obs.: meu ambiente está na porta 8080, alterar conforme o ambiente de vocês.

Aqui tem um formulário de Login e outro para Registrar novos usuários, ambos utilizam requisições sem autenticação por token, obviamente.

### Teste de uma requisição com autenticação por token
Ao centro um botão para testar uma requisição com autenticação por token, o token foi armazenado em LocalStorage no momento do login. O retorno está no `consolo.log()`, trata-se de uma requisição de serviços por categoria, ou seja, foi enviado o id de uma categoria e retornou os serviços daquela categoria.

### Problem de CORs
Na classe API em seu método `__construct()` foram acrescentadas as seguintes linhas, porém no meu sistem funciona com ou sem essas linhas:

```php
header('Content-Type: application/json; charset=UTF-8'); // essa permanece sempre
header('Access-Control-Allow-Origin: *'); // Permitir todas as origens
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS'); // Métodos permitidos
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, token'); // Cabeçalhos permitidos
header('Access-Control-Allow-Credentials: true'); // Permitir credenciais
```