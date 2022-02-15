<?php

declare(strict_types=1);

namespace Changelog\Messenger;

interface Messenger
{
    public function message(string $from, string $to, string $text, ?array $options): void;
}
