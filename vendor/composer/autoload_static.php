<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit630716a07c81721a5969ec607dfc24b0
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit630716a07c81721a5969ec607dfc24b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit630716a07c81721a5969ec607dfc24b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit630716a07c81721a5969ec607dfc24b0::$classMap;

        }, null, ClassLoader::class);
    }
}
