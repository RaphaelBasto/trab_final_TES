<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f04f209162c3cc7b2bbde15c2d2182a
{
    public static $files = array (
        'cfe4039aa2a78ca88e07dadb7b1c6126' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f04f209162c3cc7b2bbde15c2d2182a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f04f209162c3cc7b2bbde15c2d2182a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}