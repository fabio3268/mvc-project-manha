# Pasta `assets`

A pasta `assets` contém os recursos estáticos e scripts utilizados no projeto. Abaixo está uma descrição detalhada do conteúdo desta pasta:

## Estrutura da Pasta

- **`js/`**: Contém os arquivos JavaScript utilizados no projeto.
  - **`_shared/`**: Contém funções compartilhadas entre diferentes partes do projeto.
    - `functions.js`: Funções utilitárias para obter URLs do backend e manipular dados de formulários.
  - **`web/`**: Contém scripts específicos para a interface web.
    - `login.js`: Script para manipulação dos formulários de cadastro e login de usuários.

- **`css/`**: (Se aplicável) Contém os arquivos CSS utilizados para estilização do projeto.

- **`images/`**: (Se aplicável) Contém as imagens utilizadas no projeto.

## Descrição dos Arquivos

### `js/_shared/functions.js`

Este arquivo contém funções utilitárias que são usadas em várias partes do projeto. As principais funções são:

- `getBackendUrl()`: Retorna a URL base do backend.
- `getBackendUrlApi()`: Retorna a URL base da API do backend.
- `showDataForm(object)`: Preenche os campos de um formulário com os dados de um objeto.

### `js/web/login.js`

Este arquivo contém o script para manipulação dos formulários de cadastro e login de usuários. As principais funcionalidades são:

- Manipulação do formulário de cadastro (`formRegister`).
- Manipulação do formulário de login (`formLogin`).
- Envio de requisições `fetch` para a API para realizar o cadastro e login de usuários.
- Armazenamento do token de autenticação no `localStorage`.

## Como Utilizar

1. **Cadastro de Usuário**:
   - Preencha o formulário de cadastro e clique em "Cadastrar".
   - O script `login.js` enviará uma requisição `POST` para a API para criar um novo usuário.

2. **Login de Usuário**:
   - Preencha o formulário de login e clique em "Entrar".
   - O script `login.js` enviará uma requisição `POST` para a API para autenticar o usuário.
   - O token de autenticação será armazenado no `localStorage`.

Certifique-se de que os caminhos para os arquivos JavaScript estão corretos no HTML para que os scripts sejam carregados corretamente.