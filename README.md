# Talkable app for Stratum

[![Latest Version on Packagist](https://img.shields.io/packagist/v/astrogoat/talkable.svg?style=flat-square)](https://packagist.org/packages/astrogoat/talkable)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/astrogoat/talkable/run-tests?label=tests)](https://github.com/astrogoat/talkable/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/astrogoat/talkable/Check%20&%20fix%20styling?label=code%20style)](https://github.com/astrogoat/talkable/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/astrogoat/talkable.svg?style=flat-square)](https://packagist.org/packages/astrogoat/talkable)

A small Stratum app to show the Talkable widget.

## Installation

You can install the package via composer:

```bash
composer require astrogoat/talkable
```

## Usage
Included the script it in your Blade file.
```php
@include('talkable::script')
```

Then add `<div id="talkable-offer"></div>` to where you want the widget to appear.

This app require two settings to be set for it to work
- Site ID
- Script URL
These should be provided to you by Talkable.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Laura Tonning](https://github.com/astrogoat)
- [All Contributors](../../contributors)

This talkable package is forked from the awesome [Spatie talkable package](https://github.com/spatie/package-talkable-laravel#support-us). Please go support them if you can.




## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
