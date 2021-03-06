<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90b3b0bee08599b7b631af03998c924a
{
    public static $files = array (
        '99b7681400071a725b3a53c2815e1456' => __DIR__ . '/../..' . '/helpers/functions.php',
        '299892165675dc794279058ae1753c7b' => __DIR__ . '/../..' . '/helpers/template.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Listings\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Listings\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90b3b0bee08599b7b631af03998c924a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90b3b0bee08599b7b631af03998c924a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
