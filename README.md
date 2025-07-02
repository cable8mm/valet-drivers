# 🚗 Laravel Valet & Laravel Herb Custom Drivers for CakePHP2, ZeroBoard, and Vite

[![code-style](https://github.com/cable8mm/valet-drivers/actions/workflows/code-style.yml/badge.svg)](https://github.com/cable8mm/valet-drivers/actions/workflows/code-style.yml)
[![Packagist Version](https://img.shields.io/packagist/v/cable8mm/valet-drivers)](https://packagist.org/packages/cable8mm/valet-drivers)
[![Packagist Downloads](https://img.shields.io/packagist/dt/cable8mm/valet-drivers)](https://packagist.org/packages/cable8mm/valet-drivers/stats)
[![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/cable8mm/valet-drivers/php)](https://packagist.org/packages/cable8mm/valet-drivers)
[![Packagist License](https://img.shields.io/packagist/l/cable8mm/valet-drivers)](https://github.com/cable8mm/valet-drivers/blob/main/LICENSE.md)

This repository provides custom drivers for both [Laravel Valet](https://laravel.com/docs/valet) and [Laravel Herb](https://github.com/laravel-herb/herb), enabling support for frameworks and tools not officially supported out of the box.

## 🧰 What is Laravel Valet?

Laravel Valet is a super-fast development environment for macOS (and Linux via Valet Linux), designed for PHP developers. It runs as a local web server using Nginx and DnsMasq to automatically serve projects under a .test domain. Valet is lightweight and ideal for those who prefer minimal overhead without using full virtual machines or Docker.

Laravel Herb is a modern alternative to Valet that provides an isolated and Docker-powered environment, while keeping the simplicity and speed of Valet-style development.

## ✅ Supported Drivers

- [x] CakePHP 2 – Legacy PHP MVC framework
- [x] ZeroBoard – Classic Korean bulletin board system
- [x] Vite – Modern frontend build tool (for serving Vite projects in dev mode)

## 🔧 Features

- Plug-and-play support for Valet and Herb
- Auto-detection of project type based on directory structure
- Smooth local development without extra configuration

Whether you're maintaining old-school PHP applications or building fast modern frontends, these custom drivers make local development effortless with both Valet and Herb.

## Usage

### Installation

```sh
git clone git@github.com:cable8mm/valet-drivers.git

cd valet-drivers

composer install
```

### Install custom valet drivers

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
