<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9be3bf192e9ab8b97e40b9dad4ba131
{
    public static $files = array (
        '7ae72db799b1408caca791715fc89752' => __DIR__ . '/../..' . '/app/router/router.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita9be3bf192e9ab8b97e40b9dad4ba131::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita9be3bf192e9ab8b97e40b9dad4ba131::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
