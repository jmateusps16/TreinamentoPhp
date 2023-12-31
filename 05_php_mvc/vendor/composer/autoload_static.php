<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e4f55b5a99382700861df565a63d299
{
    public static $prefixLengthsPsr4 = array (
        '\\' => 
        array (
            '\\Mvc\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '\\Mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e4f55b5a99382700861df565a63d299::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e4f55b5a99382700861df565a63d299::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2e4f55b5a99382700861df565a63d299::$classMap;

        }, null, ClassLoader::class);
    }
}
