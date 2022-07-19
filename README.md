## Projeto CRUD, utilizando Laravel 8 + Php8.1 + MySql

### 1 - Faça o clone do repositório em sua máquina

<li>Abra o terminal no diretório desejado e execute:</li>
<li>git clone https://github.com/antoniolmcandido/laravel8-crud.git</li>

### 2 - Inicie o container Docker

<li>Instale o Docker caso ainda não possua</li>
<li>Abra o terminal no diretório do projeto e execute:</li>
<li>docker-compose up -d</li>
<li>O container possui as imagens do MySql, PhpMyAdmin, Nginx e Redis</li>

### 3 - Incie o Laravel

Instale o composer de <getcomposer.org>
Instale as dependências

~~~bash
php composer.phar install
~~~

Crie o arquivo `.env`

~~~bash
cp .env.example .env
~~~

Gere a chave para JWT

~~~bash
php artisan key:generate
~~~

Migre os dados

~~~bash
php artisan migrate
~~~

Inicie o servidor local

~~~bash
php artisan serve
~~~

### 4 - Página principal do projeto

<li>http://localhost:8000/clientes</li>

<img src="/resources/img/1.jpg" alt="Tela Inicial"/>

### 5 - Página de Cadastros

<li>http://localhost:8000/clientes/novo</li>

<img src="/resources/img/2.jpg" alt="Tela de Cadastros"/>

### 6 - Página de Edição

<li>http://localhost:8000/clientes/edit/1</li>

<img src="/resources/img/3.jpg" alt="Tela de Cadastros"/>

### 7 - Exemplpo de Exclusão

<img src="/resources/img/4.jpg" alt="Tela de Cadastros"/>

### 8 - Visualize todas as alteração no PhPMyAdmin

<li>http://localhost:8080</li>
<li>Mesmos usuários e senha do MySQl, como sugestão:</li>
<li>host: mysql, usuário: root, senha: 1234</li>