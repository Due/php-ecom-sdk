<?php

namespace Due;
// ---------------------------------------------------------------------------->
/**
 * Class Due
 *
 * @package Due
 */
class Due
{
    // ------------------------------------------------------------------------>
    // @var string Due API key
    public static $apiKey;

    // @var string Application Id
    public static $appId;

    // @var string Due API base URL
    public static $domain = 'https://api.due.com';

    // @var string Due API version
    public static $apiVersion = 'v1';
    // ------------------------------------------------------------------------>
    /**
     * Get Root API Path
     *
     * @return string
     */
    public static function getRootPath()
    {
        return self::$domain.'/'.self::$apiVersion;
    }
    // ------------------------------------------------------------------------>
    /**
     * Get API key
     *
     * @return string|null
     */
    public static function getApiKey()
    {
        return (empty(self::$apiKey)?'':self::$apiKey);
    }
    // ------------------------------------------------------------------------>
    /**
     * Set API key
     *
     * @param string $arg_api_key
     *
     * @return null
     */
    public static function setApiKey($arg_api_key)
    {
        self::$apiKey = $arg_api_key;
    }
    // ------------------------------------------------------------------------>
    /**
     * Get Application Id
     *
     * @return string
     */
    public static function getAppId()
    {
        return (empty(self::$appId)?'':self::$appId);
    }
    // ------------------------------------------------------------------------>
    /**
     * Set Application Id
     *
     * @param string $arg_app_id
     *
     * @return null
     */
    public static function setAppId($arg_app_id)
    {
        self::$appId = $arg_app_id;
    }
    // ------------------------------------------------------------------------>
    /**
     * Get API Version
     *
     * @return string
     */
    public static function getApiVersion()
    {
        return self::$apiVersion;
    }
    // ------------------------------------------------------------------------>
    /**
     * Set API Version
     *
     * @param string $arg_api_version
     *
     * @return null
     */
    public static function setApiVersion($arg_api_version)
    {
        self::$apiVersion = $arg_api_version;
    }
}
