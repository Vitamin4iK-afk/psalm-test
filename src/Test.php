<?php

namespace Test\Psalm;

use Test\Psalm\Test\PsalmTest;

final class Test
{
    private static array $allowed_ids;

    private static ?PsalmTest $test = null;

    public function __construct()
    {
        // ToDo: This comment somehow affects the reproduction of the problem with its length.
        self::$allowed_ids = Class1::get()->toArray();
    }

    public static function getId(): int
    {
        return self::getPsalmTestInstance()->getId();
    }

    public static function check(): bool
    {
        if (!self::$allowed_ids) {
            return false;
        }

        return true;
    }

    private static function getPsalmTestInstance(): PsalmTest
    {
        if (self::$test === null) {
            self::$test = new PsalmTest(
                '$a',
                '$b',
                '$c',
                [],
                '$e',
                null,
                true,
            );
        }

        return self::$test;
    }
}
