<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c4de0cdf2f621b9a0c2daa0746f4d05
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '1f87db08236948d07391152dccb70f04' => __DIR__ . '/..' . '/google/apiclient-services/autoload.php',
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
        'a8d3953fd9959404dd22d3dfcd0a79f0' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib3\\' => 11,
        ),
        'R' => 
        array (
            'Root\\Code\\' => 10,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'Psr\\Cache\\' => 10,
            'ParagonIE\\ConstantTime\\' => 23,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
            'Google\\Service\\' => 15,
            'Google\\Auth\\' => 12,
            'Google\\' => 7,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib3\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'Root\\Code\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
            1 => __DIR__ . '/..' . '/psr/http-factory/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
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
        'Google\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/apiclient-services/src',
        ),
        'Google\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/auth/src',
        ),
        'Google\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/apiclient/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Google_AccessToken_Revoke' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_AccessToken_Verify' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_AuthHandler_AuthHandlerFactory' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_AuthHandler_Guzzle5AuthHandler' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_AuthHandler_Guzzle6AuthHandler' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_AuthHandler_Guzzle7AuthHandler' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Client' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Collection' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Exception' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Http_Batch' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Http_MediaFileUpload' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Http_REST' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Model' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Service' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Service_Exception' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Service_Resource' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Task_Composer' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Task_Exception' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Task_Retryable' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Task_Runner' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
        'Google_Utils_UriTemplate' => __DIR__ . '/..' . '/google/apiclient/src/aliases.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c4de0cdf2f621b9a0c2daa0746f4d05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c4de0cdf2f621b9a0c2daa0746f4d05::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c4de0cdf2f621b9a0c2daa0746f4d05::$classMap;

        }, null, ClassLoader::class);
    }
}