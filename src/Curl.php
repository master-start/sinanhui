<?php


namespace Kangdev\Sinanhui;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;

class Curl
{
    /**
     * @var string
     */
    private $channel_no;

    private $url;

    public function __construct(string $channel_no,string $url)
    {
        $this->channel_no = $channel_no;
        $this->url = $url;
    }

    public function request(string $method, array $params,string $type = "POST")
    {
        if ($type == 'json'){
            $type = "POST";
        }

        $params = array_merge($params, [
            'channel_no' => $this->channel_no,
        ]);

        $client = new \GuzzleHttp\Client();

        $res = $client->request(strtoupper($type), $this->url.$method, [
            'json' => $params,
            'headers' => [
                'Content-Type' => 'application/json',
            ]
        ]);
        return json_encode(json_decode($res->getBody()));
    }
}