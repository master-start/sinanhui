<?php


namespace Kangdev\Sinanhui;

/**
 * @method array action_integral($params)
 * @method array getIntegralUser($params)
 * @method array getIntegralDetailed($params)
 * @method array getIntegralCode($params)
 * Class Server
 * @package Kangdev\Sinanhui
 */
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