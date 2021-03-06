<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit486397bc6c35e066bffa70a018f61546
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'My\\Database\\' => 12,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'A' => 
        array (
            'Aura\\SqlQuery\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'My\\Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/components/my/database',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'Aura\\SqlQuery\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/sqlquery/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit486397bc6c35e066bffa70a018f61546::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit486397bc6c35e066bffa70a018f61546::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
