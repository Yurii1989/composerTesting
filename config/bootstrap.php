<?php

require_once __DIR__.'/../vendor/autoload.php';
$dbconnect = include __DIR__.'\config.php';

\Database\database::setConfig($dbconnect['DB']);