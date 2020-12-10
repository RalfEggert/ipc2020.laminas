<?php

namespace Customer;

use Customer\Handler\CustomerHandler;
use Customer\Handler\CustomerHandlerFactory;

class ConfigProvider
{
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
            'templates'    => $this->getTemplates(),
        ];
    }

    public function getDependencies() : array
    {
        return [
            'factories'  => [
                CustomerHandler::class => CustomerHandlerFactory::class,
            ],
        ];
    }

    public function getTemplates() : array
    {
        return [
            'paths' => [
                'customer'    => [__DIR__ . '/../templates/customer'],
            ],
        ];
    }
}
