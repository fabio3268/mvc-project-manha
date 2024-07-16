# Explicação do Arquivo index.php na Pasta API

O arquivo `index.php` na pasta `api` atua como o ponto de entrada para todas as solicitações da API. Ele é estruturado para manipular diferentes tipos de solicitações (GET, POST, etc.) para vários recursos (usuários, FAQs, etc.) redirecionando essas solicitações para os manipuladores apropriados. Abaixo está uma explicação detalhada de seus componentes e como ele opera:

## Inicialização e Dependências

- **Buffer de Saída**: O arquivo começa com `ob_start()`, que ativa o buffer de saída. Isso significa que a resposta do servidor será mantida na memória até estar completamente pronta, permitindo a manipulação de cabeçalhos mesmo após o envio do conteúdo do corpo.

- **Autoload**: Inclui o arquivo de autoload do Composer `require __DIR__ . "/../vendor/autoload.php";` para carregar automaticamente as classes necessárias sem a necessidade de requerer cada arquivo manualmente.

- **Instância do Roteador**: Cria uma instância da classe `Router` do pacote `CoffeeCode\Router`. Esta instância é usada para definir rotas e seus manipuladores correspondentes. Os parâmetros `url(), ":"` inicializam o roteador com a URL base e o separador de namespace.

## Roteamento

- **Namespace**: A chamada `namespace("Source\App\Api")` define o namespace padrão para os controladores de rota, significando que todos os manipuladores de rota serão procurados dentro do namespace `Source\App\Api`.

- **Rotas de Usuários**: Define um grupo de rotas sob `/users` para operações relacionadas a usuários. Dentro deste grupo, diferentes métodos HTTP (GET, POST) são associados a ações específicas (`listUsers`, `createUser`, `loginUser`, `updateUser`, `setPassword`). Cada ação é mapeada para um método no controlador `Users`.

- **Rotas de FAQs**: De forma semelhante aos usuários, um grupo de rotas sob `/faqs` é definido para operações relacionadas a FAQs, com um método GET mapeado para a ação `listFaqs` no controlador `Faqs`.

## Despacho

- O método `dispatch()` é chamado na instância do roteador para processar a solicitação de entrada e executar o manipulador de rota correspondente com base na URL e método da solicitação.

## Tratamento de Erros

- Após o despacho, se houver um erro (por exemplo, nenhuma rota correspondente encontrada), o script define o código de resposta HTTP para 404 e retorna uma mensagem de erro codificada em JSON indicando que o endpoint não foi encontrado.

## Saída

- `ob_end_flush()` é chamado no final para liberar o buffer de saída, enviando a resposta acumulada do servidor para o cliente.

Esta estrutura permite uma maneira limpa e organizada de lidar com solicitações da API, facilitando a adição de novas rotas e controladores conforme a aplicação cresce.