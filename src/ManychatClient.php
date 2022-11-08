<?php

namespace Navvygator\ManychatSDK;

use GuzzleHttp\Client;
use Navvygator\ManychatSDK\API\Page;
use Navvygator\ManychatSDK\API\Sender;
use Navvygator\ManychatSDK\API\Subscriber;

class ManychatClient
{

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var
     */
    private $page;

    private $subscriber;

    private $sender;

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * ManyChat API Client
     * @see https://api.manychat.com/swagger
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = new Client();
    }

    /**
     * Get page-scoped API client
     * @return Page
     */
    public function page(): Page
    {
        if ($this->page !== null) {
            return $this->page();
        }

        $this->page = new Page($this->httpClient, $this->apiKey);
        return $this->page;
    }

    /**
     * Get subscriber-scoped API client
     * @return Subscriber
     */
    public function subscriber(): Subscriber
    {
        if ($this->subscriber !== null) {
            return $this->subscriber;
        }

        $this->subscriber = new Subscriber($this->httpClient, $this->apiKey);
        return $this->subscriber;
    }

    /**
     * Get sending API client
     * @return Sender
     */
    public function sender(): Sender
    {
        if ($this->sender !== null) {
            return $this->sender;
        }

        $this->sender = new Sender($this->httpClient, $this->apiKey);
        return $this->sender;
    }
}
