<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ba5d59df11fdb2b7fb26006a8661503
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
            'MVC\\' => 4,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ba5d59df11fdb2b7fb26006a8661503::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ba5d59df11fdb2b7fb26006a8661503::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ba5d59df11fdb2b7fb26006a8661503::$classMap;

        }, null, ClassLoader::class);
    }
}
