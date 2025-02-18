<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VitePublishCommand extends Command
{
    protected $signature = 'vite:publish';

    protected $description = 'Publishes the Vite build to configured CDN';

    public function handle(): void
    {
        $this->info('Publishing assets to CDN');

        $buildFiles = File::allFiles(public_path('/build'));

        $existingFiles = Storage::disk('do')->allFiles('build/scottzirkel');

        foreach ($buildFiles as $asset) {
            if (in_array('build/scottzirkel/'.$asset->getRelativePathname(), $existingFiles)) {
                continue;
            }

            $this->info('Uploading asset to: build/'.$asset->getRelativePathname());

            Storage::disk('do')->put('/build/scottzirkel/'.$asset->getRelativePathname(), $asset->getContents());
        }

        $this->info('Vite assets published successfully');
    }
}
