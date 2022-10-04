<?php

namespace Vural\LarastanTest;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class LarastanTest
{
    /** @param Builder<Model> $query */
    public function testCustomBuilderMacro(Builder $query): void
    {
        $query->foo();
    }

    /** @param Collection<int, int> $query */
    public function testMacroFromExternalPackage(Collection $query): void
    {
        $query->after(1);
    }
}
