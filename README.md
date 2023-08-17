# Proyecto de Gestión de Productos con Laravel

![Diagrama](images/MVC-Laravel.jpg)

Este proyecto utiliza el framework Laravel para crear una aplicación de gestión de productos. La elección de Laravel se basa en su eficiencia y herramientas.

## Características

- Se emplean migraciones de Artisan para crear las tablas de la base de datos.
- Artisan genera modelos y controladores.
- Modelos y controladores existentes se adaptan para registro, inicio de sesión y cierre de sesión de usuarios.
- Las contraseñas se almacenan de manera segura con bcrypt.
- Reglas de validación de Illuminate se usan para asegurar datos válidos.
- Usuarios registrados pueden realizar operaciones CRUD en productos.
- Se implementa autenticación en rutas clave usando el middleware "auth".
- La conexión a la base de datos se configura en `.env` con PDO.

## Configuración

1. Configura Laravel en tu entorno.
2. Clona este repositorio.
3. Ajusta `.env` con los detalles de tu base de datos.
4. Ejecuta `php artisan migrate` para crear tablas.
