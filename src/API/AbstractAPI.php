<?php

namespace Navvygator\ManychatSDK\API;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractAPI
{
    const BASE_URL = 'https://api.manychat.com';

    /**
     * @var Client
     */
    private $httpClient;
    /**
     * @var string
     */
    private $apiKey;

    public function __construct(Client $httpClient, string $apiKey)
    {

        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
    }

    protected function getHttpClient(): Client
    {
        return $this->httpClient;
    }

    protected function getApiKey(): string
    {
        return $this->apiKey;
    }

    protected function get(string $uri, array $data = []): ResponseInterface
    {
        return $this->getHttpClient()->get(
            $this->getAPIUrl($uri),
            array_merge($this->getAuthHeaders(), ['query' => $data])
        );
    }

    protected function post(string $uri, array $data): ResponseInterface
    {
        return $this->getHttpClient()->post(
            $this->getAPIUrl($uri),
            array_merge($this->getAuthHeaders(), ['json' => $data])
        );
    }

    private function getAuthHeaders(): array
    {
        return [
            'headers' => [
                'Authorization' => sprintf('Bearer %s', $this->getApiKey())
            ]
        ];
    }

    protected function getAPIUrl(string $uri): string
    {
        return sprintf('%s%s', self::BASE_URL, $uri);
    }

    protected function extractResponseData(ResponseInterface $response, string $field = 'data'): array
    {
        return json_decode($response->getBody()->getContents(), true)[$field] ?? [];
    }

}