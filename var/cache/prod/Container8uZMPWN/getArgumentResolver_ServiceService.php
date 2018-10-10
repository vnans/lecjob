<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\CjOffresController::delete' => function () {
    return ($this->privates['.service_locator.YXNMYZx'] ?? $this->load('get_ServiceLocator_YXNMYZxService.php'));
}, 'App\\Controller\\CjOffresController::edit' => function () {
    return ($this->privates['.service_locator.YXNMYZx'] ?? $this->load('get_ServiceLocator_YXNMYZxService.php'));
}, 'App\\Controller\\CjOffresController::index' => function () {
    return ($this->privates['.service_locator.U8w5AFS'] ?? $this->load('get_ServiceLocator_U8w5AFSService.php'));
}, 'App\\Controller\\CjOffresController::show' => function () {
    return ($this->privates['.service_locator.q4iV3.e'] ?? $this->load('get_ServiceLocator_Q4iV3_EService.php'));
}, 'App\\Controller\\SearchController::recherche' => function () {
    return ($this->privates['.service_locator.WTlTne3'] ?? $this->load('get_ServiceLocator_WTlTne3Service.php'));
}, 'App\\Controller\\CjOffresController:delete' => function () {
    return ($this->privates['.service_locator.YXNMYZx'] ?? $this->load('get_ServiceLocator_YXNMYZxService.php'));
}, 'App\\Controller\\CjOffresController:edit' => function () {
    return ($this->privates['.service_locator.YXNMYZx'] ?? $this->load('get_ServiceLocator_YXNMYZxService.php'));
}, 'App\\Controller\\CjOffresController:index' => function () {
    return ($this->privates['.service_locator.U8w5AFS'] ?? $this->load('get_ServiceLocator_U8w5AFSService.php'));
}, 'App\\Controller\\CjOffresController:show' => function () {
    return ($this->privates['.service_locator.q4iV3.e'] ?? $this->load('get_ServiceLocator_Q4iV3_EService.php'));
}, 'App\\Controller\\SearchController:recherche' => function () {
    return ($this->privates['.service_locator.WTlTne3'] ?? $this->load('get_ServiceLocator_WTlTne3Service.php'));
})));
