<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Puppys Backend🐶❤️

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Este proyecto se creó con la idea de tener organizados tus animales domésticos contiene toda la información que te hace falta para tus mascotas, calendario para tener tus citas de veterinario organizadas y vacunas.

### Instalación 🔧

-Lo primero que debemos hacer es copiar el repositorio de a local con el siguiente codigo

```
git clone “https://github.com/jbrenes95/Puppys.git”
```

-Deberemos darle permisos

```
sudo chmod -R 755 "capeta del proyecto"
```

-Instalamos las dependencias del proyecto

```
composer install
```

-Nos copiaremos los archivos de configuracion con el siguiente comando

```
cp .env.example .env
```

-Ya solo faltara configurar tu base de datos y lanzar las migraciones de las base de datos
-Primero crear la base de datos en mysql
-Configurar en el .env la base de datos

```
DB_HOST=localhost
DB_DATABASE=tu_base_de_datos
DB_USERNAME=root
DB_PASSWORD=
```

-Ahora lanzaremos las migraciones

```
php artisan migrate
```

-Con esto podremos lanzar el servidor

```
php artisan serve --host 0.0.0.0
```

-Necesitaras el front funcionando [Frontend](https://github.com/jbrenes95/FrontPuppys).

## License ©️

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
