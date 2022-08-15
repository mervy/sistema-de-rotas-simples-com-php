<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitee23ed7b4b3aa6918ee3258de2babffd
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitee23ed7b4b3aa6918ee3258de2babffd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitee23ed7b4b3aa6918ee3258de2babffd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitee23ed7b4b3aa6918ee3258de2babffd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}