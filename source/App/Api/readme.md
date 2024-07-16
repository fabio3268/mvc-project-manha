# Classe API

A classe `Api` é projetada para ser a base de todas as APIs no projeto. Ela gerencia a autenticação do usuário e a resposta padrão para as solicitações. Abaixo está uma explicação detalhada de seus componentes e funcionalidades:

## Construtor

- **Content-Type**: Ao instanciar a classe, o `Content-Type` é definido como `application/json; charset=UTF-8` para garantir que todas as respostas sejam em JSON e com a codificação correta.
- **Headers**: Os cabeçalhos de todas as solicitações são recuperados e armazenados na propriedade `$headers`.
- **Autenticação do Usuário**: Verifica se existe um token no cabeçalho `token`. Se o token estiver presente e for válido (verificado pelo método `verify` da classe `TokenJWT`), a propriedade `$userAuth` é atualizada com os dados do usuário extraídos do token.

## Método `back`

- **Resposta Padrão**: Este método é responsável por enviar a resposta para o cliente. Ele recebe um array `$response` com os dados a serem enviados e um código de status HTTP `$code`, que por padrão é `200`.
- **Configuração do Código de Resposta**: O código de status HTTP da resposta é definido pelo `http_response_code`.
- **Envio da Resposta**: A resposta é codificada em JSON e enviada ao cliente usando `echo`. A codificação é feita com as opções `JSON_PRETTY_PRINT` e `JSON_UNESCAPED_UNICODE` para melhorar a legibilidade e suportar caracteres Unicode.

Essa estrutura facilita a criação de endpoints de API, padronizando a autenticação e a resposta, além de promover a reutilização de código.

# Classe Users

A classe `Users` estende a classe `Api`, especializando-se no gerenciamento de operações relacionadas aos usuários na API. Ela implementa métodos para listar, criar, autenticar (login), atualizar informações do usuário e alterar a senha. Aqui está um detalhamento de cada método e sua funcionalidade:

## Construtor

- Chama o construtor da classe pai `Api` para inicializar as configurações básicas, como definir o `Content-Type` e processar a autenticação do usuário.

## listUsers

- **Objetivo**: Retorna uma lista de todos os usuários.
- **Processo**: Instancia a classe `User` e utiliza o método `selectAll()` para recuperar todos os usuários. Utiliza o método `back` herdado para enviar a resposta ao cliente.

## createUser

- **Objetivo**: Cria um novo usuário com os dados fornecidos.
- **Validação**: Verifica se todos os campos necessários estão preenchidos.
- **Processo**: Cria uma instância de `User` com os dados fornecidos e tenta inseri-lo no banco de dados. Retorna uma resposta de sucesso ou erro, dependendo do resultado da operação.

## loginUser

- **Objetivo**: Autentica um usuário com base no email e senha fornecidos.
- **Processo**: Verifica as credenciais do usuário. Se forem válidas, gera um token JWT e retorna os detalhes do usuário junto com o token.

## updateUser

- **Objetivo**: Atualiza as informações de um usuário autenticado.
- **Validação**: Verifica se o usuário está autenticado.
- **Processo**: Atualiza as informações do usuário com os novos dados fornecidos. Retorna uma resposta de sucesso ou erro.

## setPassword

- **Objetivo**: Altera a senha de um usuário autenticado.
- **Validação**: Verifica se o usuário está autenticado.
- **Processo**: Altera a senha do usuário se a senha atual, a nova senha e a confirmação da nova senha forem fornecidas corretamente. Retorna uma resposta de sucesso ou erro.

Cada método utiliza o método `back` para enviar respostas ao cliente, garantindo uma interface de comunicação consistente e facilitando a manutenção.