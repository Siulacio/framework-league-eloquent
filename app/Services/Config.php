<?php

namespace Application\Services;

class Config
{
    private static $instance;

    private function __construct()
    {
        //not used
    }

    public static function instance(): Config
    {
        if (! isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class;
        }

        return self::$instance;
    }

    public function get(string $section, string $key): ?string
    {
        $config = parse_ini_file(base_path('app/config.ini'), true);
        if (array_key_exists($section, $config)) {
            if (array_key_exists($key, $config[$section])) {
                return $config[$section][$key];
            }
        }
        return null;
    }

    public function __clone()
    {
        trigger_error('Clone object not allowed', E_USER_ERROR);
    }

}
