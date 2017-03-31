# Due E-Commerce PHP SDK
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

First set your API Key and App Id

```php
\Due\Due::setApiKey('1cdb92X9e9613a5r3a64c2X49ec17f7x1b8ac40adcqc0s23bb7f8bxc7q1y');
\Due\Due::setAppId('test_30b4d69aQ1fb4Q8dkwn3');
```

The default environment is production, but you can set it to stage for testing

```php
\Due\Due::setEnvName('stage'); //set to 'stage' or 'prod'
```

Create A Customer

```php
$customer = \Due\Customers::create(array(
    'email' => 'customer@email.com',
    'phone' => '2226061234',
    'full_name' => 'Alex Brown',
    'card_id' => '2726251911',
    'card_hash' => 'CC_f4nu9f2nfue9432fnu4e932fbu432gfb4u923fnjdwbu29'
));

$customer_id = $customer->id;
```

Charge A Customer

```php
$transaction = \Due\Customers::charge(array(
    'amount' => 15,
    'currency' => 'USD',
    'customer_id' => $customer_id
));

$transaction_id = $transaction->id;
```

Get Transaction

```php
$transaction = \Due\Transactions::get(array(
    'id' => $transaction_id
));
```

Get Transaction List

```php
$transactions_list = \Due\Transactions::all(array(
    'page' => 1
));

foreach ($transactions_list->transactions as $transaction) {
    $transaction_id = $transaction->id;
}
```

Charge A Card

```php
$transaction = \Due\Charge::card(array(
    'amount' => 15,
    'currency' => 'USD',
    'card_id' => '1238203690',
    'card_hash' => 'CC_XMzfDhNahJsfPAGPzVpX'
));

$transaction_id = $transaction->id;
```

Get A Customer

```php
$customer = \Due\Customers::get(array(
    'id' => $customer_id
));

$customer_id = $customer->id;
```

Get Customer List

```php
$customer_list = \Due\Customers::all(array(
    'page' => 1
));

foreach ($customer_list->customers as $customer) {
    $customer_id = $customer->id;
}
```

Update Customer

```php
$customer->card_id = '132311820';
$customer->card_hash = 'CC_VXV81vIv7rx0VRXbLlxq';
$updated_customer = \Due\Customers::update($customer);

$customer_id = $customer->id;
```

## Contribution Requests

If you would like to contribute, please contact us at [support@due.com](mailto:support@due.com).

