<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1dc5cd4a9ca45d3a936d8ab903db4e4
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TexLab\\MyDB\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TexLab\\MyDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/texlab/mydb/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1dc5cd4a9ca45d3a936d8ab903db4e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1dc5cd4a9ca45d3a936d8ab903db4e4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
