<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$name = new \Phpbergen\UserName('James', 'Bond');
$user = new \Phpbergen\User($name);
print $user . PHP_EOL;
