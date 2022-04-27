<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit221b8b41d1da1ed934f26a6100194dc7
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yuwak\\Kalkulator\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yuwak\\Kalkulator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit221b8b41d1da1ed934f26a6100194dc7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit221b8b41d1da1ed934f26a6100194dc7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit221b8b41d1da1ed934f26a6100194dc7::$classMap;

        }, null, ClassLoader::class);
    }
}
