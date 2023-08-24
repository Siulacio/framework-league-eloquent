<?php

require __DIR__ . '/../vendor/autoload.php';

$dotEnv = new \Dotenv\Dotenv(base_path(''));
$dotEnv->load();

Kint::dump(getenv('DB_NAME'));
