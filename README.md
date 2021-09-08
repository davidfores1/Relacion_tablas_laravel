<h1>REQUISITOS:</h1>
Laravel Framework: 7.30.4
MYSQL: 10.4.19
PHP Version 7.4.20

-Clonar un proyecto de Laravel desde GitHub
Instalar dependencias:<br>
Para ello abriremos una terminal en la carpeta del proyecto y ejecutaremos: composer install<br>
Vemos cómo se ha creado la carpeta vendor<br>

-Crear una base de datos que soporte Laravel
Entre las bases de datos que soporta Laravel por defecto, encontramos: MySQL, SQL Lite, PostgreSQL y SQL Server.

-Crear el archivo .env
Este archivo es necesario para, entre otras cosas, configurar la conexión de la bbdd, el entorno del proyecto, motores para envio y recepción de correos etc …
Como por cuestiones de seguridad tampoco se subió, necesitamos crearlo.
Podemos duplicar el archivo .env.example, renombrarlo a .env e incluir los datos de conexión de la base de datos
Ejemplo:

..... 
-DB_CONNECTION=mysql
-DB_HOST=localhost
-DB_PORT=3306
-DB_DATABASE=laravel_project
-DB_USERNAME=root
-DB_PASSWORD=secret
....

-Generar una clave
La clave de aplicación es una cadena aleatoria almacenada en la clave APP_KEY dentro del archivo .env. Notarás que también falta.
Para crear la nueva clave e insertarla automáticamente en el .env, ejecutaremos:
php artisan key:generate

*Ejecutar migraciones
Por último, ejecutamos las migraciones para que se generen las tablas con:
php artisan migrate

-Nota:
Si tuvieramos que incluir o crear nuevas migraciones utilizaríamos:
php artisan migrate:refresh 
php artisan migrate:fresh  //borra y crea todas las tablas de nuevo
