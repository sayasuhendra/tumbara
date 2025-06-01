<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SimpanCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'simpan:terjemah';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menjalankan perintah simpan terjemahan';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('translations:export', ['--all' => 'true']);
    }
}
