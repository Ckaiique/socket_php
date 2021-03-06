<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57cf449003059ee16f9b39555a80dca5
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'React\\Stream\\' => 13,
            'React\\EventLoop\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'React\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/stream/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit57cf449003059ee16f9b39555a80dca5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit57cf449003059ee16f9b39555a80dca5::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit57cf449003059ee16f9b39555a80dca5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit57cf449003059ee16f9b39555a80dca5::$classMap;

        }, null, ClassLoader::class);
    }
}
