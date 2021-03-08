<p>
<a href="https://travis-ci.org/prinx/http-codes"><img src="https://travis-ci.com/prinx/http-codes.svg?branch=main" alt="Build Status"></a>
<a href="https://packagist.org/packages/prinx/http-codes"><img src="https://poser.pugx.org/prinx/http-codes/license" alt="License"></a>
</p>

# HTTP CODE

PHP class for HTTP Response Codes

## Installation

```shell
composer require prinx/http-codes

```

## Usage

```php
// "Import" the class
use Prinx\HttpCode\Code as HTTP;

// Use the code in your code.
echo HTTP::OK; // 200
```

## Contribute

- Todo:
  - Document undocument codes.
  - Add other relevant unofficial codes.

## Credits

- [w3](https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html)
- [HTTP Statuses](https://httpstatuses.com/)
- [Wikipedia](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes)
