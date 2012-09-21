<?php
use Doctrine\Common\Annotations\AnnotationRegistry;
use Symfony\Component\ClassLoader\ApcUniversalClassLoader;

if (function_exists('apc_store')) {
    $loader = require __DIR__.'/../vendor/autoload.php';
    $loader = new ApcUniversalClassLoader('sf212');
    $loader->register(true);
} else {
    $loader = require __DIR__.'/../vendor/autoload.php';
}

// intl
// if (!function_exists('intl_get_error_code')) {
//     require_once __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs/functions.php';

//     $loader->add('', __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs');
// }

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
