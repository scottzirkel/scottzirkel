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

        $existingFiles = Storage::disk('do')->allFiles('scottzirkel/build');

        foreach ($buildFiles as $asset) {
            if (in_array('scottzirkel/build/'.$asset->getRelativePathname(), $existingFiles)) {
                continue;
            }

            $this->info('Uploading asset to: build/'.$asset->getRelativePathname());

            Storage::disk('do')
                ->put('/scottzirkel/build/'.$asset->getRelativePathname(), $asset->getContents(), 'public');
        }

        // do cleanup

        $this->info('Vite assets published successfully');
    }
}
