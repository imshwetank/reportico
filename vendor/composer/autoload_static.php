<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb376aa5aebc47958671cc0f6e38a3316
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pChart\\' => 7,
        ),
        'R' => 
        array (
            'Reportico\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pChart\\' => 
        array (
            0 => __DIR__ . '/../..' . '/pChart',
        ),
        'Reportico\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Config_File' => __DIR__ . '/..' . '/smarty/smarty/libs/Config_File.class.php',
        'Smarty' => __DIR__ . '/..' . '/smarty/smarty/libs/Smarty.class.php',
        'Smarty_Compiler' => __DIR__ . '/..' . '/smarty/smarty/libs/Smarty_Compiler.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb376aa5aebc47958671cc0f6e38a3316::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb376aa5aebc47958671cc0f6e38a3316::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb376aa5aebc47958671cc0f6e38a3316::$classMap;

        }, null, ClassLoader::class);
    }
}
