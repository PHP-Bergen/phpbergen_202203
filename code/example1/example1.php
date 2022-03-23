<?php declare(strict_types=1);

require 'vendor/autoload.php';

$logger = new \Monolog\Logger('phpBergen');
$logger->pushHandler(
  new \Monolog\Handler\StreamHandler(
    __DIR__ . '/logs/demo.log',
    Logger::WARNING
  )
);

$logger->warning('PHP Bergen i progress');
$logger->error('Something is borked.');
