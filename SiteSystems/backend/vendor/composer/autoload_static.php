<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb03c5a701bdfb22b9a2f44c180d0a97
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb03c5a701bdfb22b9a2f44c180d0a97::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb03c5a701bdfb22b9a2f44c180d0a97::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteb03c5a701bdfb22b9a2f44c180d0a97::$classMap;

        }, null, ClassLoader::class);
    }
}
