<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee23ed7b4b3aa6918ee3258de2babffd
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mervy\\SimpleRouteWithPhp\\' => 25,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mervy\\SimpleRouteWithPhp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee23ed7b4b3aa6918ee3258de2babffd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee23ed7b4b3aa6918ee3258de2babffd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee23ed7b4b3aa6918ee3258de2babffd::$classMap;

        }, null, ClassLoader::class);
    }
}
