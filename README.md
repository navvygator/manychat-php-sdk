## ManyChat PHP SDK
This is unofficial SDK based on the ManyChat public API: https://api.manychat.com/swagger
___
## Requirements

- php 7.1+
___

## Installing
The recommended way to install Guzzle is through [Composer](https://getcomposer.org/).
>composer require navvygator/manychat-php-sdk
___

## Samples
Initialize client

```injectablephp
$apiKey = '12345678987654321:aabbccddeeff11223344ffddbbccaa';
$client = new ManychatClient($apiKey);
```
Work with page-scoped API
```injectablephp
$client->page()->getInfo(); //get page's info
$client->page()->createTag('new API tag'); //create new tag
$client->page()->createBotField('New bot field', 'number', 'test bot field', 88);
```

Work with subscriber-scoped API
```injectablephp
$subscriber = $client->subscriber()->findByName('John Smith'); // find subscriber by full name
$subscriber = $client->subscriber()->getInfo(257545534557); //get the subscriber's info by subscriber id
$client->subscriber()->addTagByName(257545534557, 'new API tag'); // apply tag to subscriber
```

Work with sending API
```injectablephp
$client->sender()->sendContent(257545534557, $content); // send dynamic content to the subscriber
$client->sender()->sendFlow(257545534557, 'flow_123'); //send flow to the subscriber
```