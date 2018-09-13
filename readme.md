# Validate a phone number

Using Laravel's powerful validation feature.

## Requirements

- PHP >= 7.0.0
- Laravel >= 5.5

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
