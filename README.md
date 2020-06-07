<h1 align="center">
  Cadastro de Tarefas
</h1>
<p align="center">
  <a href="#tecnologias-e-práticas-utilizadas">Tecnologias e práticas utilizadas</a> •
  <a href="#funcionalidades">Funcionalidades</a> •
  <a href="#comandos">Comandos</a>
</p>

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
  </a>
</p>
<p align="center">
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tecnologias e práticas utilizadas
- PHP 7.2
- Laravel 7.x
- SQLite
- Arquitetura MVC

## Funcionalidades
- Gestão de Tarefas

###

![alt text](https://raw.githubusercontent.com/samuel-oldra/CadastroDeTarefas/main/README_IMGS/lista.png)

## Comandos

### Criação do projeto
```
composer create-project laravel/laravel meu-site
```

### Instalação e atualização das dependências
```
composer install
composer update
```

### Geração de uma nova chave da aplicação
```
php artisan key:generate
```

### Make Model, Controller e Migration
```
php artisan make:model Tarefa -m

php artisan make:controller TarefaController --resource

php artisan make:migration add_pontos_to_tarefas_table --table=tarefas
php artisan make:migration add_data_entrega_to_tarefas_table --table=tarefas
php artisan make:migration add_tempo_to_tarefas_table --table=tarefas
```

### Migrations
```
php artisan migrate                  // cria as tabelas
php artisan migrate:refresh          // recria as tabelas alteradas
php artisan migrate:fresh            // recria todas as tabelas
```
