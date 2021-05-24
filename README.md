# Hybrid\Template\Hierarchy
The framework has its own template hierarchy that can be used instead of the default WordPress template hierarchy.  It is not much different than the default.  It was built to extend the default by making it smarter and more flexible.  The goal is to give theme developers and end users an easy-to-override system that doesn't involve massive amounts of conditional tags within files.

## Requirements

* WordPress 4.9+.
* PHP 5.6+ (preferably 7+).
* [Composer](https://getcomposer.org/) for managing PHP dependencies.

## Documentation

This project a part of the Hybrid Core framework. It may require other packages, which will be installed via Composer.

### Installation

First, you'll need to open your command line tool and change directories to your theme folder.

```bash
cd path/to/wp-content/themes/<your-theme-name>
```

Then, use Composer to install the package.

```bash
composer require themehybrid/hybrid-template-hierarchy
```

### Register the service provider

You need to register the service provider during your bootstrapping process.  In your bootstrapping code, you should have something like the following:

```php
$themeslug = new \Hybrid\Core\Application();
```

After that point, you can register the service provider:

```php
$themeslug->provider( \Hybrid\Template\Hierarchy\Provider::class );
```

## Copyright and License

This project is licensed under the [GNU GPL](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 or later.

2008&thinsp;&ndash;&thinsp;2021 &copy; [Justin Tadlock](https://themehybrid.com).
