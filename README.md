# TODO List - CRUD de Tarefas

Este projeto é um desafio técnico para criar um CRUD (Create, Read, Update, Delete) de tarefas utilizando as seguintes tecnologias:

## Stacks Utilizadas

1. **PHP 8.4**: Linguagem de programação principal utilizada para o backend.
2. **Laravel 12**: Framework PHP utilizado para estruturar o projeto, gerenciar rotas, controllers, models e views.
3. **PostgreSQL**: Banco de dados relacional utilizado para armazenar as tarefas e outras informações necessárias.
4. **Gemini IA**: Integração com IA para funcionalidades avançadas, como sugestões automáticas dos detalhes da tarefa (prioridade, descrição, passo à passo e etc)
5. **Mailpit**: Ferramenta utilizada para testar o envio de e-mails em ambiente de desenvolvimento.
6. **PHPUnit**: Framework de testes para garantir a qualidade do código e a funcionalidade das features.
7. **Bootstrap 5**: Framework CSS utilizado para estilizar as páginas e garantir responsividade.
8. **jQuery**: Biblioteca JavaScript utilizada para interações dinâmicas no frontend, como validações e animações.
9. **EloquentORM**: ORM (Object-Relational Mapping) do Laravel utilizado para interagir com o banco de dados de forma mais intuitiva.
10. **Docker**: Utilizado para containerizar a aplicação, facilitando a configuração do ambiente de desenvolvimento.

## Estrutura do Projeto

### Backend

-   **PHP 8.4 + Laravel 12**: Toda a lógica de negócio, controllers, models e rotas foram desenvolvidos utilizando o Laravel.
-   **EloquentORM**: Utilizado para realizar as operações de CRUD no banco de dados PostgreSQL.
-   **Gemini IA**: Integrado para fornecer sugestões inteligentes de automáticas dos detalhes da tarefa (prioridade, descrição, passo à passo e etc).
-   **Mailpit**: Configurado para testar o envio de e-mails, como notificações de criação de tarefas.
-   **PHPUnit**: Testes unitários e de integração foram escritos para garantir a funcionalidade das features.

### Frontend

-   **Bootstrap 5**: Utilizado para criar uma interface responsiva e estilizada.
-   **jQuery**: Adicionado para interações dinâmicas, como validações de formulários e animações.

### Banco de Dados

-   **PostgreSQL**: Configurado como o banco de dados principal para armazenar as tarefas e outras informações.

### Infraestrutura

-   **Docker**: Utilizado para criar containers que facilitam a configuração do ambiente de desenvolvimento, incluindo PHP, PostgreSQL, Mailpit e outras dependências.

## Como Executar o Projeto

1. **Clone o repositório**:

    ```bash
    git clone https://github.com/seu-usuario/todo-list.git
    cd todo-list
    ```

2. **Configure o Docker**:

Certifique-se de ter o Docker e Docker Compose instalados.

Execute o seguinte comando para subir os containers:

```bash
    docker-compose up -d
```

3.  **Instale as dependências do PHP**:

    ```bash
    docker exec -it todo-list-app composer install
    ```

4.  **Configure o ambiente**:

    Copie o arquivo .env.example para .env e configure as variáveis de ambiente, como conexão com o PostgreSQL.

5.  **Gere a chave do Laravel**:

    ```bash
    docker exec -it todo-list-app php artisan key:generate
    ```

6.  **Execute as migrations**:

    ```bash
    docker exec -it todo-list-app php artisan migrate
    ```

7.  **Execute as seeders**:

    ```bash
    docker exec -it todo-list-app php artisan db:seed
    ```

8.  Acesse a aplicação:

Abra o navegador e acesse http://localhost.

8. Testes:

Para executar os testes com PHPUnit:

    ```bash
    docker exec -it todo-list-app php artisan test
    ```
