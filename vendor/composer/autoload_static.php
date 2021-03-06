<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a4bf93a4a749d2aa191d362c222399c
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xthiago\\PDFVersionConverter\\' => 28,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Filesystem\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xthiago\\PDFVersionConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/xthiago/pdf-version-converter/src',
            1 => __DIR__ . '/..' . '/xthiago/pdf-version-converter/tests',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a4bf93a4a749d2aa191d362c222399c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a4bf93a4a749d2aa191d362c222399c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8a4bf93a4a749d2aa191d362c222399c::$classMap;

        }, null, ClassLoader::class);
    }
}
