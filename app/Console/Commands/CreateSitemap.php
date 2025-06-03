<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Spatie\Sitemap\SitemapGenerator;

class CreateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tumbara:create-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml for SEO.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        SitemapGenerator::create('https://tumbara.id/')->writeToFile(Storage::path('public/sitemap.xml'));
    }
}
