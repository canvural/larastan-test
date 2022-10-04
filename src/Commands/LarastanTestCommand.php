<?php

namespace Vural\LarastanTest\Commands;

use Illuminate\Console\Command;

class LarastanTestCommand extends Command
{
    public $signature = 'larastan-test';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
