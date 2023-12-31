<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite500f852607cb50ee0e1be4e90c284f9
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

        spl_autoload_register(array('ComposerAutoloaderInite500f852607cb50ee0e1be4e90c284f9', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite500f852607cb50ee0e1be4e90c284f9', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite500f852607cb50ee0e1be4e90c284f9::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
