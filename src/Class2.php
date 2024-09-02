<?php

namespace Test\Psalm;

use Iterator;

/**
 * @template-implements Iterator<int>
 */
class Class2 implements Iterator
{
    private array $data = [];

    public function current(): mixed
    {
        return current($this->data);
    }

    public function next(): void
    {
        next($this->data);
    }

    public function key(): mixed
    {
        return key($this->data);
    }

    public function valid(): bool
    {
        return key($this->data) !== null;
    }

    public function rewind(): void
    {
        reset($this->data);
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
