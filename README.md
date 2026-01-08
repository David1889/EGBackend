Requisitos:
PHP 8.4.16
Composer
OpenSSL

Consideraciones:
Conexión a la base de datos: Pedir el .env por whatsapp y meterlo en la raíz del proyecto. Se encuentra en el .gitignore por ser repo público.
Base de datos: MySQL 8.0.35 hosteada en Aiven. Pedir los datos de conexión para conectarse mediante el workbench u otro gestor de bases de datos.


Descargar dependencias:
->Pararse en la carpeta del proyecto
composer install

Levantar el proyecto:
->Pararse en la carpeta del proyecto
php artisan serve
