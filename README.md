# CakePHP2 and Zeroboard Valet Herd Drivers

[![code-style](https://github.com/cable8mm/valet-drivers/actions/workflows/code-style.yml/badge.svg)](https://github.com/cable8mm/valet-drivers/actions/workflows/code-style.yml)
[![Packagist Version](https://img.shields.io/packagist/v/cable8mm/valet-drivers)](https://packagist.org/packages/cable8mm/valet-drivers)
[![Packagist Downloads](https://img.shields.io/packagist/dt/cable8mm/valet-drivers)](https://packagist.org/packages/cable8mm/valet-drivers/stats)
[![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/cable8mm/valet-drivers/php)](https://packagist.org/packages/cable8mm/valet-drivers)
[![Packagist License](https://img.shields.io/packagist/l/cable8mm/valet-drivers)](https://github.com/cable8mm/valet-drivers/blob/main/LICENSE.md)

Copy CakePHP2ValetDriver.php to your `~/.config/valet/Drivers` folder for Laravel/Valet, or to `~/Library/Application Support/Herd/config/valet/Drivers` folder for [Laravel Herd](https://herd.laravel.com/), after setting up a [Laravel/Valet](https://laravel.com/docs/10.x/valet).

## Features

- [x] Support CakePHP2
- [x] Support Zeroboard(not XpressEngine)

## Usage

### Cloning

```sh
git clone git@github.com:cable8mm/valet-drivers.git

cd valet-drivers
```

### Copy

```sh
composer valet
# copy drivers to valet custom drivers folder

composer herd
#copy drivers to herd custom drivers folder
```

And visit your local site. Everything else is not required except for copying.

### Formatting

```bash
composer lint
# Modify all files to comply with the PSR-12.

composer inspect
# Inspect all files to ensure compliance with PSR-12.
```

### Test

Testing the Valet driver is challenging; thus, if you encounter any issues, please create an issue to address your situation, and we'll resolve it promptly.

## License

The CakePHP2 and Zeroboard Valet Driver Collection is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
