<?php

namespace Ajellender\LaravelNestedSet\Commands;

use Illuminate\Console\Command;

class LaravelNestedSetCommand extends Command
{
    public $signature = 'laravel-nested-set';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
