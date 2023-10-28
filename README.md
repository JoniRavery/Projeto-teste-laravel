## Requisitos

- PHP (8.2.4)
- Composer
- Banco de Dados :MySQL (Xampp)

##USO

Projeto criado para mostrar uma breve atividade usando laravel e realizando a conexão com API.
!!!! (Apenas uma atividade)  !!!

#Para poder rodar o projeto:
instalado o Xampp, 
banco de dados criado pelo MysqlWorkbench (apos fazer a conexão localmente), 
o arquivo .env modificado de acordo com o banco criado (DB_HOST,DB_PORT,DB_DATABASE,DB_USERNAME,etc).
-------------------------------
Abrir prompt de comando ou terminal pelo editor, e entrar na pasta do projeto,

Executar comando para rodar as Seed
php artisan migrate --seed

e para popular a tabela, executar o comando:
php artisan db:seed --class=NoticiaSeeder

para subir o server:
php artisan serve
