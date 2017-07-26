<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58a6a63985cc85f2ea6a82b858546ae1
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58a6a63985cc85f2ea6a82b858546ae1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58a6a63985cc85f2ea6a82b858546ae1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
