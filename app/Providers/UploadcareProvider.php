<?php

namespace UF\Providers;

use Silex\Application;
use Silex\ServiceProviderInterface;

class UploadcareProvider implements ServiceProviderInterface
{
    private $key;
    private $secret;

    public function __construct($key, $secret)
    {
        $this->key    = $key;
        $this->secret = $secret;
    }

    public function register(Application $app)
    {
        $app['uploadcare'] = $app->share(function () use ($app) {
            return new \Uploadcare\Api($this->key, $this->secret);
        });
    }

    public function boot(Application $app)
    {
        // 
    }
}
