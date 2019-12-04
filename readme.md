# Validate a phone number

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sander3/laravel-phone-number-validation/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sander3/laravel-phone-number-validation/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/soved/laravel-phone-number-validation/v/stable)](https://packagist.org/packages/soved/laravel-phone-number-validation)
[![Monthly Downloads](https://poser.pugx.org/soved/laravel-phone-number-validation/d/monthly)](https://packagist.org/packages/soved/laravel-phone-number-validation)
[![License](https://poser.pugx.org/soved/laravel-phone-number-validation/license)](https://packagist.org/packages/soved/laravel-phone-number-validation)

Using Laravel's powerful validation feature.

## Requirements

- PHP >= 7.0.0
- Laravel >= 5.5 or 6.0

## Installation

Install the package via the Composer package manager:

```bash
$ composer require soved/laravel-phone-number-validation
```

## Usage

You may use the phone number validation as any other validation rule:

```php
<?php

$request->validate([
    'phone_number' => 'required|string|phone_number',
]);

```

If needed, you may customize the validation error message by adding an entry to the validation language file:

```php
'phone_number' => 'The phone number format is invalid.',

'accepted' => 'The :attribute must be accepted.',

// The rest of the validation error messages...
```

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to Sander de Vos via [sander@tutanota.de](mailto:sander@tutanota.de). All security vulnerabilities will be promptly addressed.

## License

This package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
