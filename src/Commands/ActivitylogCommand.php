<?php

namespace Kikechic\Activitylog\Commands;

use Illuminate\Console\Command;

class ActivityLogCommand extends Command
{
    public $signature = 'novi:activitylog';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
