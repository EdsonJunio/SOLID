<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f0d5d96c860e1533365b82ffd65d745
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f0d5d96c860e1533365b82ffd65d745::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f0d5d96c860e1533365b82ffd65d745::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f0d5d96c860e1533365b82ffd65d745::$classMap;

        }, null, ClassLoader::class);
    }
}
