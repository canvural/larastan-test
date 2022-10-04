<?php

namespace Vural\LarastanTest;

use Vural\LarastanTest\Commands\LarastanTestCommand;
use Illuminate\Database\Eloquent\Builder;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LarastanTestServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('larastan-test')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larastan-test_table')
            ->hasCommand(LarastanTestCommand::class);
    }

    public function packageBooted(): void
    {
        Builder::macro('foo', function (): int {
            return 5;
        });
    }
}
