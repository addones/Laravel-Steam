<h1 align="center">Laravel-Steam</h1>

<p align="center">
    <a href="https://travis-ci.com/addones/Laravel-Steam"><img src="https://travis-ci.com/addones/Laravel-Steam.svg?branch=master" alt="Build Status"></a>
    <a href="https://github.styleci.io/repos/137112887"><img src="https://github.styleci.io/repos/137112887/shield" alt="StyleCI Status"></a>
    <a href="https://scrutinizer-ci.com/g/addones/Laravel-Steam"><img src="https://img.shields.io/scrutinizer/coverage/g/addones/Laravel-Steam.svg?style=flat-square" alt="Scrutinizer Coverage"></a>
    <a href="https://github.com/addones/Laravel-Steam/releases"><img src="https://poser.pugx.org/addones/laravel-steam/v/stable?format=flat-square" alt="releases status"></a>
    <a href="https://packagist.org/packages/addones/Laravel-Steam"><img src="https://poser.pugx.org/addones/laravel-steam/downloads?format=flat-square"></a>
    <a href="https://github.com/addones/Laravel-Steam/blob/master/LICENSE"><img src="https://poser.pugx.org/addones/laravel-steam/license?format=flat-square" alt="license"></a>
</p>

- [Installation](#installation)
- [Documentation](#documentation)

This package provides an easy way to get details from the steam api service.  The services it can access are:

- `ISteamNews`
- `IPlayerService`
- `ISteamUser`
- `ISteamUserStats`
- `ISteamApps`

## Installation

First of all, You need get your API key from [Steam](https://steamcommunity.com/dev/apikey)

### in Laravel 5.5 and up

```
composer require addones/laravel-steam
```

Publish the config file.

```
php artisan vendor:publish
```

Lastly, you can using Steam class in controller use namespace top of that file

```php
use Steam;
```

🎉

### in Laravel 5.0 - 5.4

```
composer require addones/laravel-steam
```

Once that is finished, add the service provider to `config/app.php`

```php
Dawoea\SteamApi\SteamApiServiceProvider::class,
```

> The alias to Steam is already handled by the package.

And, publish the config file.

```
php artisan vendor:publish
```

Lastly, you can using Steam class in controller use namespace top of that file

```php
use Steam;
```

🎉

## Documentation

You can find the full documentation [Here](https://github.com/addones/Laravel-Steam/wiki).

## Credits
- [syntax/steam-api](https://github.com/syntaxerrors/Steam)
