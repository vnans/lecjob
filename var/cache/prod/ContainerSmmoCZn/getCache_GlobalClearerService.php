<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.global_clearer' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ($this->services['cache.app'] ?? $this->load('getCache_AppService.php')), 'cache.system' => ($this->services['cache.system'] ?? $this->load('getCache_SystemService.php')), 'cache.validator' => ($this->privates['cache.validator'] ?? $this->load('getCache_ValidatorService.php')), 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->load('getCache_AnnotationsService.php')), 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->load('getDoctrine_ResultCachePoolService.php')), 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->load('getDoctrine_SystemCachePoolService.php')), 'cache.property_access' => ($this->privates['cache.property_access'] ?? $this->load('getCache_PropertyAccessService.php'))));
