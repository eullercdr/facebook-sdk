<?php

namespace CodeBot;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CallSendApi
{
    const URL = 'https://graph.facebook.com/v2.6/me/messages';
    private $pageAcessToken;

    /**
     * CallSendApi constructor.
     * @param $pageAcessToken
     */
    public function __construct($pageAcessToken)
    {
        $this->pageAcessToken = $pageAcessToken;
    }

    public function make(array $message, string $url = null, $method = 'POST')
    {

        $client = new Client;
        $url = $url ?? CallSendApi::URL;


        $response = $client->request($method, $url, [
            'json' => $method,
            'query' => ['access_token' => $this->pageAcessToken]
        ]);
        return (string)$response->getBody();

    }


}