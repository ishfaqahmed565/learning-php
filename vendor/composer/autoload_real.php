<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitba4c28c9f9f46fe9b7ff08dc6309f002
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

        spl_autoload_register(array('ComposerAutoloaderInitba4c28c9f9f46fe9b7ff08dc6309f002', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitba4c28c9f9f46fe9b7ff08dc6309f002', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitba4c28c9f9f46fe9b7ff08dc6309f002::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
