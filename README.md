# prestashop_api_client

Unofficial PHP client for the PrestaShop Webservice API (API key auth).

## Install

```bash
composer require michalper/prestashop_api_client
```

## Usage

```php
$client = new PrestaShopClient();
$client->setUrl('https://your-store.com')->setApiKey('...');

$customer = $client->customers->get(123);
$customers = $client->customers->search(new SearchModel());

$order = $client->orders->get(456);
```

`customers`, `orders` and `resource` expose `get($id)` and `search(SearchModel $params)`, returning typed model objects deserialized from the Webservice response.

## License

GNU GPL
