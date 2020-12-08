<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13fa896c8de3ae23a247f39369ec7cac
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MatthiasWeb\\Utils\\Test\\' => 23,
            'MatthiasWeb\\Utils\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MatthiasWeb\\Utils\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test/phpunit',
        ),
        'MatthiasWeb\\Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13fa896c8de3ae23a247f39369ec7cac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13fa896c8de3ae23a247f39369ec7cac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
