<?php

namespace JunaidPK\EnvManager\Commands;

use Illuminate\Console\Command;

class EnvManagerCommand extends Command
{
    public $signature = 'env-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
