<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c928f6f795a95cdf1622865451883b8
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'cleanerdb\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'cleanerdb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c928f6f795a95cdf1622865451883b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c928f6f795a95cdf1622865451883b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}