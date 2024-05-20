<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckPhpVersion extends Command
{
    protected $signature = 'check:php-version';
    protected $description = 'Check the PHP version';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('PHP version: ' . phpversion());
    }
}
