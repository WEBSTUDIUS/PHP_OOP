<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91b69945d55b1031a84eb1845b6b6e5b
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91b69945d55b1031a84eb1845b6b6e5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91b69945d55b1031a84eb1845b6b6e5b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91b69945d55b1031a84eb1845b6b6e5b::$classMap;

        }, null, ClassLoader::class);
    }
}