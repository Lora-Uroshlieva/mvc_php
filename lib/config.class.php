<?php


//this is class with static property with type array,
// where we will set and get some settings.
//For example - data for access to database.
class Config
{
    protected static $settings = array();

    public static function get($key)
    {
        return isset(self::$settings[$key])
            ?self::$settings[$key] : null;
    }

    public static function set($key, $value)
    {
        self::$settings[$key] = $value;
    }
}