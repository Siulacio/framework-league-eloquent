<?php

if (!function_exists('base_path')) {
    function base_path(string $path): string
    {
        return __DIR__ . '/..//' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

if (! function_exists('config')) {
    function config(string $section, string $key): ?string
    {
        $config = \Application\Services\Config::instance();
        return $config->get($section, $key);
    }
}
