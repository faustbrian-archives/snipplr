# Snipplr PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/Snipplr-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Snipplr-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/snipplr-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Snipplr-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/Snipplr-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Snipplr-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Snipplr-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require faustbrian/snipplr-php-client
```

## Usage

```php
$client = new BrianFaust\Snipplr\Client();
$client->setConfig(['apiKey' => 'YOUR_API_KEY']);

$response = $client->api('File')->scan('infected.rar');

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
