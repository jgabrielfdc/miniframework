<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9041d2e855e17d34a6bc91112699d413
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9041d2e855e17d34a6bc91112699d413::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9041d2e855e17d34a6bc91112699d413::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9041d2e855e17d34a6bc91112699d413::$classMap;

        }, null, ClassLoader::class);
    }
}
