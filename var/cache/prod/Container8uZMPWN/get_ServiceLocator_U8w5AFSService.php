<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.U8w5AFS' shared service.

return $this->privates['.service_locator.U8w5AFS'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('query' => function (): \App\service\DataService {
    return ($this->privates['App\service\DataService'] ?? $this->load('getDataServiceService.php'));
}, 'session' => function () {
    return ($this->services['session'] ?? $this->load('getSessionService.php'));
}));