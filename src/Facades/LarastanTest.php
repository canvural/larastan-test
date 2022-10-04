<?php

namespace Vural\LarastanTest\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vural\LarastanTest\LarastanTest
 */
class LarastanTest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Vural\LarastanTest\LarastanTest::class;
    }
}
