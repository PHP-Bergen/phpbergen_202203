<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Phpbergen\User;
use Phpbergen\UserName;

$name = new UserName('James', 'Bond');
$user = new User($name);

print $user . PHP_EOL;

