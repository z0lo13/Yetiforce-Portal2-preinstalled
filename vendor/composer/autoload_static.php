<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit396a928abe35796652b672f3a63e68d4
{
    public static $files = array (
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
        'cb36b04d5d2b9f01644f31bd33d2126a' => __DIR__ . '/../..' . '/config/version.php',
        'a2747e2d53b5dbe649b32d138c239c09' => __DIR__ . '/../..' . '/config/config.php',
        'ccd7f0bd15e3f9b6913529b67810bd71' => __DIR__ . '/../..' . '/app/errorhandler.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YF\\Modules\\' => 11,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YF\\Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/modules',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit396a928abe35796652b672f3a63e68d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit396a928abe35796652b672f3a63e68d4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit396a928abe35796652b672f3a63e68d4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
