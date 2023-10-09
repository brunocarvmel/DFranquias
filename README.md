
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


<br/>

<h1 align="center">DFranquias</h1>
<h4 align="center">Um CRUD para o cadastramento de gado</h4>

## Sobre o projeto
Este projeto tem como finalidade atestar meus conhecimentos nos seguintes pontos:
- Desenvolvimento de aplicações CRUD utilizando LARAVEL
- Práticas com ELoquent
- Práticas com MySQL
- Práticas com PHP
- Práticas com API Restfull
  


## Por que este projeto?
-Este projeto me foi introduzido a partir de um processo seletivo na qual me disponibilizei para participar e faz parte do meu portfólio pessoal, uma maneira de comprovar meus conhecimentos em PHP e Laravel.
- Projetos CRUD's são aplicações que utilizam as quatro operações básicas de armazenamento em banco de dados e fazem parte da rotina de um desenvolvedor back-end, então esse projeto serviu como uma simulação da rotina real de um desenvolvedor back-end atuando com PHP.

## Sobre a modelagem do Banco de Dados
- O desafio consistia na construção de uma aplicação CRUD utilizando Laravel.
- Para o desafio foram criadas as seguintes tabelas:
	- gados
	- abates


## Classificacao

<h4 align="center">Gados</h4>

php
Method: GET
Url: localhost/api/gados/

- Para listar todos os gados


php
Method: GET
Url: localhost/api/gados/{id}

- Para listar um gado em específico


php
Method: POST
Url: localhost/api/gados

- Para Adicionar um novo gado
- Parameters:
	'codigo' (interger)
	'qtd_leite' (decimal)
	'qtd_racao' (decimal)
	'peso' (decimal)
	'nascimento' (date)


php
Method: PUT
Url: localhost/api/gados/{id}

- Para Atualizar um gado
- Parameters:
	'codigo' (interger)
	'qtd_leite' (decimal)
	'qtd_racao' (decimal)
	'peso' (decimal)
	'nascimento' (date)


php
Method: DELETE
Url: localhost/api/gados/{id}

<h4 align="center">Abates</h4>
php
Method: GET
Url: localhost/api/abates

- Para listar todos os abates


php
Method: GET
Url: localhost/api/abates/{id}

- Para listar um abate em específico


php
Method: POST
Url: localhost/api/abates

- Para Adicionar um novo abate
- Parameters:
	'id_gado' (interger)

php
Method: DELETE
Url: localhost/api/abates/{id}

## Setup

Para a configuração do projeto no seu ambiente local, algumas etapas precisam ser seguidas:

1. De o comando git clone deste [repositório](https://github.com/brunocarvmel/DFranquias/) para que você possa rodar.
	 
    git clone https://github.com/brunocarvmel/DFranquias/

2. Tenha um servidor Apache na sua máquina, pode ser o XAMPP, WampServer, Laragon ou Docker.

3. Tenha uma instância do MySQL na sua máquina.
4. Tenha o Composer instalado.
5. Acesse a raiz do projeto e rode o comando "composer install".
6. Crie um banco de dados com o nome "dfranquias".
7. Rode o comando "php artisan migrate".
8. E por fim, rode com o comando "php artisan serve".


## Dependências e suas versões
- PHP 7.4
- Composer
- Postman
- Laravel 10x


