# Due PHP Library
=========================

Sign up for a free account at https://app.due.com/register

Request Access: https://due.com/blog/request-access-use-due-payment-gateway-woocommerce/

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require due/php-ecom-sdk
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Manual Installation

If you do not wish to use Composer, you can download the [latest release](https://github.com/due/php-ecom-sdk/releases). Then, to use the bindings, include the `init.php` file.

```php
require_once('/path/to/php-ecom-sdk/init.php');
```

## Getting Started

Simple usage looks like:

```php
\Due\Due::setApiKey('1cdb92X9e9613a5r3a64c2X49ec17f7x1b8ac40adcqc0s23bb7f8bxc7q1y');
\Due\Due::setAppId('test_30b4d69aQ1fb4Q8dkwn3');
$card_transaction = \Due\Charge::card(array(
    'amount' => 15,
    'currency' => 'USD',
    'card_id' => '1238203690',
    'card_hash' => 'CC_XMzfDhNahJsfPAGPzVpX'
));
var_dump($card_transaction);
```

## Contribution Requests

If you would like to contribute, please contact us at [support@due.com](mailto:support@due.com).

