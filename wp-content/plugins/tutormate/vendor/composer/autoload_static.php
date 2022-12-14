<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit003917a6d04481beda00a49d97ba3c69
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TUTORMATE\\' => 10,
        ),
        'A' => 
        array (
            'AwesomeMotive\\WPContentImporter2\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TUTORMATE\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
        'AwesomeMotive\\WPContentImporter2\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib/awesomemotive/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit003917a6d04481beda00a49d97ba3c69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit003917a6d04481beda00a49d97ba3c69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit003917a6d04481beda00a49d97ba3c69::$classMap;

        }, null, ClassLoader::class);
    }
}
