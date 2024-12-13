<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4fc8f9ba5ccb536950514b13e0311abe
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ankush\\Iseven\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ankush\\Iseven\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4fc8f9ba5ccb536950514b13e0311abe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4fc8f9ba5ccb536950514b13e0311abe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4fc8f9ba5ccb536950514b13e0311abe::$classMap;

        }, null, ClassLoader::class);
    }
}
