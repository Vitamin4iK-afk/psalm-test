<?php

namespace Test\Psalm\Test;

class PsalmTest
{
    public function __construct(
        string $a,
        string $b,
        string $c,
        array $d,
        string $e = 'cabinet',
        $f = null,
        bool $j = false
    ) {
        if ($j) {
            echo var_export([$a, $b, $c, $d, $e, $f, $j], true) . PHP_EOL;
        }
    }

    public function getId(): int
    {
        return 12345;
    }
}