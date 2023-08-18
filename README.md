# Proyecto de Gestión de Productos con Laravel

![Diagrama](resources/images/MVC-Laravel.jpg)

Este proyecto utiliza el framework Laravel para crear una aplicación de gestión de productos. La elección de Laravel se basa en su eficiencia y herramientas.

## Dump SQL

El archivo di-rosa_mauro.sql se encuentra en la carpeta 'resources' de este repositorio.

## Características

- Se emplean migraciones de Artisan para crear las tablas de la base de datos.
- Se utiliza Artisan para generar modelos y controladores.
- Modelos y controladores existentes se adaptan para registro, inicio de sesión y cierre de sesión de usuarios.
- Las contraseñas se almacenan de manera segura con bcrypt.
- Reglas de validación de Illuminate se usan para asegurar datos válidos.
- Usuarios registrados pueden realizar operaciones CR en productos.
- Usuarios con permiso de administrador pueden realizar todas las operaciones en productos.
- Se creo una migracion para agregar la columna 'isadmin' en la tabla users sin perder los datos ya guardados en la misma.
- Se implemento autenticación en rutas clave usando el middleware "auth" y dentro de este se creo un gate para manejar permisos de administrador en la navegacion.
- La conexión a la base de datos se configura en `.env` con PDO.
- Se creo el componente de blade para usar de cabecera html y nav-bar global de la aplicacion.

## Configuración

1. Configura Laravel en tu entorno.
2. Clona este repositorio.
3. Ajusta `.env` con los detalles de tu base de datos: se debe copiar el archivo del ejemplo .env.example y luego reemplazar los siguientes datos en la seccion mysql: 

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mvc-crud
DB_USERNAME=root
DB_PASSWORD=

4. Crear base de datos mvc-crud con los parametros del punto anterior.
5. Ejecuta `php artisan migrate` para crear tablas.
