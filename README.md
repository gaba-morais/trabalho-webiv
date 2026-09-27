# Trabalho Web IV

Cadastro de categorias, fornecedores e produtos em Laravel.

## Pré-requisitos

- PHP 8.3 ou superior
- [Composer](https://getcomposer.org/download/)

## Como executar

Na pasta do projeto:

```bash
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```

No Linux ou no macOS, troque `copy .env.example .env` por `cp .env.example .env`.

Abra [http://127.0.0.1:8000](http://127.0.0.1:8000) e use estas páginas:

- [Categorias](http://127.0.0.1:8000/categoria/listar)
- [Fornecedores](http://127.0.0.1:8000/fornecedor/listar)
- [Produtos](http://127.0.0.1:8000/produto/listar)
