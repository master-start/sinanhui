<?php


namespace Kangdev\Sinanhui;


class Server
{
    private $services;

    public function __construct($config)
    {
        $this->services = new Service($config['channel_no'], $config['url']);
    }

    public function __call($name, $arguments)
    {
        return $this->services->{$name}(...$arguments);
    }
}