<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Mis notas

1) el trabajo comienzae en las rutas
2) Luego creo el controlador
Cada metodo es la respuesta a una ruta
3) los modelos reprsentan las tablas en la base de datos
4) En la carpeta views estan las vistas que del proyecto.


Clase 1 y 2
*Creacion de un proyecto laravel
laravel new nombreDelProyecto


Clase 3
Artisan es una interaz de lineas de comando de laravel la cual nos ayuda a crear archivos bases de laravel.

Modelo vista controlador

El modelo:
Es la representacion de las tablas en que pueden existir o no en nuestra base de datos.

El controlador: 
Gestiona la peticiones y solicitudes que se hacen a la base de datos.


Clase 4
La configuracion de las rutas se hacen en el archivo web.php


clase 8
Creacion de migrations comando
php artisan make:migration create_NOMBRE_DE_LA_MIGRACION_table

Actuaslizar campos de la tabla creada
php artisan migrate

Las migraciones crean las estructuras inciales de una tabla


Clase 9
Creacion de modelos
php artisan  make:model Nombre_de_la_tabla -fc
Con el factory podemos crear informacion falsa.
Alli esta el ejemplo

Datos semillas

Luego debemos a ir a los seeder para generar esos datos y con el comando.
php artisan:migrate refresh --seed


Clase 10 
Utilizacion de eloquent
Nos ayuda a trabajar con los datos como si fueran objetos de php.

Clase 11
Creacion de relaciones.

Clase 13
Para instalar un componente plantilla de administracion e inicio de sesion instalamos lo siguiente

Antes debemos guardar las rutas que hayamos creado
en web.app

composer require laravel/breeze
php artisan brezee:install --dev

Luego de eso modificamos las plantilla que hayamos creado agregando los enlaces para las vistas creadas
Si despues de eso no tiene los estilos bien debemos reintalar node con npm install

Clase 14