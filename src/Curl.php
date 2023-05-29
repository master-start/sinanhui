<?php


namespace Kangdev\Sinanhui;
use GuzzleHttp\Client;
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

    public function request(string $method, array $params,string $type = "post")
    {
        if ($type == 'json'){
            $type = "post";
        }

        $params = array_merge($params, [
            'channel_no' => $this->channel_no,
        ]);

        $headers = [];
        $body = $params;
        $url = $this->url.$method;
        $client = new Client();
        $request = new Request(strtoupper($type), $url, $headers, $body);
        return $client->sendAsync($request);


        $request = new Request($type, $this->url.$method,[],$params);
        return $request->getBody();
    }
}