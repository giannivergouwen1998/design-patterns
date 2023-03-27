<?php

declare(strict_types=1);

namespace App\Behavioral\Memento;

final class State
{
    public const CREATED = 'created';
    public const OPENED = 'opened';
    public const CLOSED = 'closed';
    public const ASSIGNED = 'assigned';
    public const DELETED = 'deleted';

    /** @var array<int, string> */
    public static array $states = [
        self::OPENED,
        self::CREATED,
        self::CLOSED,
        self::ASSIGNED,
        self::DELETED,
    ];

    public function __construct(
        public string $state
    ) {
        $this->isValid($this->state);
    }

    private function isValid(string $state): void
    {
        if (!in_array($state, self::$states)) {
            throw new \InvalidArgumentException('Invalid state given');
        }
    }

    public function __toString(): string
    {
        return $this->state;
    }
}
