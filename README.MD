# Meu Projeto com Doctrine, Twig e FastRoute
- Este projeto, faz parte de um estudo sobre as tecnologias acima, entao para por em praticas conhecimentos que obtive saiu esse projeto.

## Visão Geral

Este é um projeto PHP que demonstra a integração do Doctrine (um ORM), Twig (um mecanismo de template) e FastRoute (um roteador de alto desempenho) em uma aplicação.

## Requisitos

- PHP instalado
- Composer instalado

## Instalação

1. Clone este repositório, na raiz do seu servidor:

```shell
git clone https://github.com/seu-usuario/seu-projeto.git
```

* Caso esteja usando xampp ou outro servidor php, e o projeto nao esteja na raiz, por exemplo: localhost/projeto, precisara configurar o arquivo http.conf

### http.conf

 ```php
DocumentRoot "C:/xampp/htdocs/nomedoseuprojeto"
<Directory "C:/xampp/htdocs/nomedoseuprojeto">
 ```

2. Instale as dependências usando o Composer:


```shell
composer install
```
3. Configuração
- Crie um arquivo .env na raiz do projeto e adicione as informações de configuração do banco de dados:

```shell 
DB_DRIVER=pdo_mysql
DB_USER=seu-usuario
DB_PASSWORD=sua-senha
DB_NAME=nome-do-banco
```

## 
## Inicie o servidor de desenvolvimento:
```shell 
 php -S localhost:8000 -t  /
```
Acesse a aplicação no seu navegador em http://localhost:8000.

## Estrutura do Projeto

```shell
 > Pasta
 -> Subpasta
 - Arquvivos
```

```php
 > Framework
    -> Controller
    -> Core
        - Views.php
    -> Entity
    -> Helpers
        - create-users.php
    -> Http
        - Kernel.php
        - Request.php
        - Response.php
    -> Models
> public
> resources
    > Views
> routes
    - web.php
- .env
- .env.exemple
- .gitignore
- .htaccess
- bootstrap.php
- cli-config.php
- composer.json
- index.php