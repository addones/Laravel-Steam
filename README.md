<h1 align="center">Laravel-Steam</h1>

<p align="center">
    <a href="https://travis-ci.com/addones/Laravel-Steam"><img src="https://img.shields.io/travis/addones/Laravel-Steam.svg?style=flat-square" alt="Build Status"></a>
    <a href="https://github.com/addones/Laravel-Steam/releases"><img src="https://img.shields.io/github/release/addones/Laravel-Steam.svg?style=flat-square" alt="releases status"></a>
    <a href="https://packagist.org/packages/addones/Laravel-Steam"><img src="https://img.shields.io/packagist/vpre/laravel/laravel-steam.svg?style=flat-square" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/addones/Laravel-Steam"><img src="https://img.shields.io/packagist/dt/addones/laravel-steam.svg?style=flat-square" alt="Total Downloads"></a>
	<a href="https://github.com/addones/Laravel-Steam/blob/master/LICENSE"><img src="https://img.shields.io/github/license/addones/Laravel-Steam.svg?style=flat-square" alt="license"></a>
</p>

- [Installation](#installation)
- [Usage](#usage)
- [Contributors](#contributors)

This package provides an easy way to get details from the steam api service.  The services it can access are:

- `ISteamNews`
- `IPlayerService`
- `ISteamUser`
- `ISteamUserStats`
- `ISteamApps`

## Installation

You can pull in the package via composer:

```
composer require addones/laravel-steam
```

Once that is finished, add the service provider to `config/app.php`

```php
Dawoea\SteamApi\SteamApiServiceProvider::class,
```

> The alias to Steam is already handled by the package.

Lastly, publish the config file.  You can get your API key from [Steam](https://steamcommunity.com/dev/apikey)

```
php artisan vendor:publish
```

And you can using Steam class in controller use namespace top of that file

```php
use Steam;
```

## Documentation

You can find the full documentation [Here](https://github.com/addones/Laravel-Steam/wiki).

## Credits
- [syntax/steam-api](https://github.com/syntaxerrors/Steam)