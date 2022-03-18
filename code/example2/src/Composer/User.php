<?php declare(strict_types=1);

namespace Phpbergen;

use JetBrains\PhpStorm\Pure;

final class User
{

    public function __construct(private UserName $userName)
    {
    }

    #[Pure]
    public function __toString(): string
    {
        return $this->userName->name();
    }
}
