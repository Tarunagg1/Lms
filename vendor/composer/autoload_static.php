<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84508ce5c2c056db90066b139c30e2d7
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit84508ce5c2c056db90066b139c30e2d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84508ce5c2c056db90066b139c30e2d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
