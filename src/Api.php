<?php


namespace Kangdev\Sinanhui;


use Hanson\Foundation\AbstractAPI;

class Api extends AbstractAPI
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

    /**
     * @param string $method
     * @param array $params
     * @return mixed
     */
    public function request(string $method, array $params,string $type = "post")
    {
        $params = array_merge($params, [
            'channel_no' => $this->channel_no,
        ]);

        $http = $this->getHttp();

        switch ($type){
            case "json":
                $response = $http->json($this->url . $method, $params);
                break;
            case "post":
                $response = $http->post($this->url . $method, $params);
                break;
            case "get":
                $response = $http->get($this->url . $method, $params);
                break;
            default:
                $response = $http->post($this->url . $method, $params);
        }

        return json_decode(strval($response->getBody()), true);
    }
}