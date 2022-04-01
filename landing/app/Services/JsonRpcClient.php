<?php
namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\Log;

class JsonRpcClient
{
    const JSON_RPC_VERSION = '2.0';
    const METHOD_URI = 'api/visit';

    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'headers' => ['Content-Type' => 'application/json'],
            'base_uri' => config('services.jsonRpc.url')
        ]);
    }

    public function send(string $method, array $params): array
    {
        $response = $this->client
            ->post(self::METHOD_URI, [
                RequestOptions::JSON => [
                    'jsonrpc' => self::JSON_RPC_VERSION,
                    'method' => $method,
                    'params' => $params,
                    'id' => time(),
                ]
            ])->getBody()->getContents();
        Log::debug($response);
        return json_decode($response, true);
    }
}
