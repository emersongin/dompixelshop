# DESAFIO DompixelShop

🤝 ## Descrição de Projeto

Desafio construído para atender ao teste prático da DompixelShop. Onde foi solicitado que fosse desenvolvida uma solução WEB com framework Laravel, nela sendo possível gerencial um catálogo de produtos de forma simples e com layout responsivo.

💻 ## Requisitos

    PHP (8.1.20 ou superior)
    Composer
    PostgreSQL

☕ ## Dificuldades

    Não foram encontradas dificuldade para o projeto.
    
📫 ## Instalação
    
1. clone o repositorio em uma pasta do sistema, rodando o comando:

`git clone https://github.com/emersongin/dompixelshop.git`
    
2. acesse a pasta do projeto dompixelshop e baixe as dependencias do Composer, rodando o comando:

    `composer install`

3. crie um banco de dados local chamado dompixelshop

4. crie uma copia do arquivo .env.exemplo e renomeio para .env nas linhas:
>
    DB_CONNECTION=pgsql (foi utilizado o DB postgreSQL)
    DB_HOST=(host local)
    DB_PORT=(porta local)
    DB_DATABASE=dompixelshop
    DB_USERNAME=(username do DB)
    DB_PASSWORD=(senha do DB)

6. em seguida rode o comando para as migrations:

    `php artisan migrate`
    
7. em seguida rode o comando para gerar uma chave de criptografia do laravel ou ao acessar ele deve solicitar em tela que gere:

    `php artisan key:generate --ansi`

8. pronto, rode o seguinte comando e acesse:

    `php artisan serve`

## Autor
EMERSON ANDREY
