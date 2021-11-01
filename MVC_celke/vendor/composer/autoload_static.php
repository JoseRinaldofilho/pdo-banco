<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffd643aecf1362567379d9e47565c505
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitffd643aecf1362567379d9e47565c505::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffd643aecf1362567379d9e47565c505::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitffd643aecf1362567379d9e47565c505::$classMap;

        }, null, ClassLoader::class);
    }
}
