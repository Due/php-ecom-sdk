# Due E-Commerce PHP SDK

Sign up for a free account at https://app.due.com/register

Working PHP Example: https://static.due.com/code-examples/due-ecom-php-test.zip

Request Access: https://due.com/blog/request-access-use-due-payment-gateway-woocommerce/

API Docs: https://api-docs.due.com

[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/c57bfa81b9121c15ddad#?env%5Bdue-ecommerce-stage%5D=W3siZW5hYmxlZCI6dHJ1ZSwia2V5IjoiZG9tYWluIiwidmFsdWUiOiJodHRwczovL3N0YWdlLWFwaS5kdWUuY29tIiwidHlwZSI6InRleHQifSx7ImVuYWJsZWQiOnRydWUsImtleSI6InZlcnNpb24iLCJ2YWx1ZSI6InYxIiwidHlwZSI6InRleHQifSx7ImVuYWJsZWQiOnRydWUsImtleSI6ImFwaV9rZXkiLCJ2YWx1ZSI6InJlcGxhY2VfdGhpc19hcGlrZXkiLCJ0eXBlIjoidGV4dCJ9LHsiZW5hYmxlZCI6dHJ1ZSwia2V5IjoiYXBwX2lkIiwidmFsdWUiOiJyZXBsYWNlX3RoaXNfYXBwaWQiLCJ0eXBlIjoidGV4dCJ9LHsiZW5hYmxlZCI6dHJ1ZSwia2V5IjoiY2FyZF9pZCIsInZhbHVlIjoicmVwbGFjZV90aGlzX2NhcmRpZCIsInR5cGUiOiJ0ZXh0In0seyJlbmFibGVkIjp0cnVlLCJrZXkiOiJjYXJkX2hhc2giLCJ2YWx1ZSI6InJlcGxhY2VfdGhpc19jYXJkaGFzaCIsInR5cGUiOiJ0ZXh0In0seyJlbmFibGVkIjp0cnVlLCJrZXkiOiJjdXJyZW5jeSIsInZhbHVlIjoiVVNEIiwidHlwZSI6InRleHQifSx7ImVuYWJsZWQiOnRydWUsImtleSI6ImN1c3RvbWVyX2lkIiwidmFsdWUiOiJyZXBsYWNlX3RoaXNfY3VzdG9tZXJpZCIsInR5cGUiOiJ0ZXh0In0seyJlbmFibGVkIjp0cnVlLCJrZXkiOiJ1c2VyX2lwIiwidmFsdWUiOiJyZXBsYWNlX3RoaXNfaXBhZGRyZXNzIiwidHlwZSI6InRleHQifSx7ImVuYWJsZWQiOnRydWUsImtleSI6InBsYXRmb3JtX2lkIiwidmFsdWUiOiJyZXBsYWNlX3RoaXNfcGxhdGZvcm1pZCIsInR5cGUiOiJ0ZXh0In0seyJlbmFibGVkIjp0cnVlLCJrZXkiOiJzZWN1cml0eV90b2tlbiIsInZhbHVlIjoicmVwbGFjZV90aGlzX3NlY3VyaXR5dG9rZW4iLCJ0eXBlIjoidGV4dCJ9LHsiZW5hYmxlZCI6dHJ1ZSwia2V5IjoidHJhbnNhY3Rpb25faWQiLCJ2YWx1ZSI6InJlcGxhY2VfdGhpc190cmFuc2FjdGlvbmlkIiwidHlwZSI6InRleHQifV0=)

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

1. The default environment is production, but you can set it to stage for testing

```php
\Due\Due::setEnvName('stage'); //set to 'stage' or 'prod'
\Due\Due::setRailType('us'); //set to 'us' or 'us_int'
```

2. Set your API Key and App Id

```php
//API Key from your Due Account
\Due\Due::setApiKey(' -- SET API KEY HERE -- ');
//App Id given after approval
\Due\Due::setAppId(' -- SET APP ID HERE -- ');
```

3. Platforms will set their Platform Id instead of an App Id. Please contact support@due.com for more info on Platform Payments.

```php
//Platform user's Due API Key
\Due\Due::setApiKey(' -- SET API KEY HERE -- ');
//Platform Id given after approval
\Due\Due::setPlatformId(' -- SET PLATFORM ID HERE -- ');
```

### Create A Customer

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

### Charge A Customer

```php
$transaction = \Due\Customers::charge(array(
    'amount' => 15,
    'currency' => 'USD',
    'customer_id' => $customer_id
));

$transaction_id = $transaction->id;
```

### Get Transaction

```php
$transaction = \Due\Transactions::get(array(
    'id' => $transaction_id
));
```

### Get Transaction List

```php
$transactions_list = \Due\Transactions::all(array(
    'page' => 1
));

foreach ($transactions_list->transactions as $transaction) {
    $transaction_id = $transaction->id;
}
```

### Charge A Card

```php
$transaction = \Due\Charge::card(array(
    'amount' => 15,
    'currency' => 'USD',
    'card_id' => '1238203690',
    'card_hash' => 'CC_XMzfDhNahJsfPAGPzVpX'
));

$transaction_id = $transaction->id;
```

### Get A Customer

```php
$customer = \Due\Customers::get(array(
    'id' => $customer_id
));

$customer_id = $customer->id;
```

### Get Customer List

```php
$customer_list = \Due\Customers::all(array(
    'page' => 1
));

foreach ($customer_list->customers as $customer) {
    $customer_id = $customer->id;
}
```

### Update Customer

```php
$customer->card_id = '132311820';
$customer->card_hash = 'CC_VXV81vIv7rx0VRXbLlxq';
$updated_customer = \Due\Customers::update($customer);

$customer_id = $customer->id;
```

## Contribution Requests

If you would like to contribute, please contact us at [support@due.com](mailto:support@due.com).

