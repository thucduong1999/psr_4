<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5b158812028a747106a9ee4378415ac
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PSR\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PSR\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb5b158812028a747106a9ee4378415ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb5b158812028a747106a9ee4378415ac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb5b158812028a747106a9ee4378415ac::$classMap;

        }, null, ClassLoader::class);
    }
}
