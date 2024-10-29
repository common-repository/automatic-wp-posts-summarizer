<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit058d0243f7b9b0c2af1bf7e87d32aafb
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Awps\\Templates\\' => 15,
            'Awps\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Awps\\Templates\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Awps\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit058d0243f7b9b0c2af1bf7e87d32aafb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit058d0243f7b9b0c2af1bf7e87d32aafb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit058d0243f7b9b0c2af1bf7e87d32aafb::$classMap;

        }, null, ClassLoader::class);
    }
}
