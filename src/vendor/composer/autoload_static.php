<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit296fd33e5d6d9554aadfd39c6fa16e83
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit296fd33e5d6d9554aadfd39c6fa16e83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit296fd33e5d6d9554aadfd39c6fa16e83::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
