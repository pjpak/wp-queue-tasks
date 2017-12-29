<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit44247df0bc4adc251c446ae1642f8928
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPQueueTasks\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPQueueTasks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'WPQueueTasks\\Processor' => __DIR__ . '/../..' . '/src/Processor.php',
        'WPQueueTasks\\Register' => __DIR__ . '/../..' . '/src/Register.php',
        'WPQueueTasks\\Scheduler' => __DIR__ . '/../..' . '/src/Scheduler.php',
        'WPQueueTasks\\Utils' => __DIR__ . '/../..' . '/src/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit44247df0bc4adc251c446ae1642f8928::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit44247df0bc4adc251c446ae1642f8928::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit44247df0bc4adc251c446ae1642f8928::$classMap;

        }, null, ClassLoader::class);
    }
}
