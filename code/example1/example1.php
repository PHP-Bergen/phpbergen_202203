<?php declare(strict_types=1);

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require 'vendor/autoload.php';

$logger = new Logger('phpBergen');
$logger->pushHandler(
  new StreamHandler(
    __DIR__ . '/logs/demo.log',
    Logger::WARNING
  )
);

$logger->warning('PHP Bergen i progress');
$logger->error('Something is borked.');
