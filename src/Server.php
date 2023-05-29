<?php


namespace Kangdev\Sinanhui;


use Hanson\Foundation\Foundation;

class Server extends Foundation
{
    private $services;

    public function __construct($config)
    {
        parent::__construct($config);
        $this->services = new Service($config['channel_no'], $config['url']);
    }

    public function __call($name, $arguments)
    {
        return $this->services->{$name}(...$arguments);
    }
}