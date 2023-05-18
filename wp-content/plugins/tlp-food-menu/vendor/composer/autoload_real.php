<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit58155d54804feb90ec7e53e49d8c3e39
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

        spl_autoload_register(array('ComposerAutoloaderInit58155d54804feb90ec7e53e49d8c3e39', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit58155d54804feb90ec7e53e49d8c3e39', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit58155d54804feb90ec7e53e49d8c3e39::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}