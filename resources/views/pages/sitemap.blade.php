<?php

use Illuminate\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use function Laravel\Folio\render;

render(fn(View $view) => response($view)->header('Content-Type', 'text/xml'));

$pages = Cache::remember('sitemap-pages', now()->addDay(), function () {
    return collect(Storage::disk('pages')->allFiles())
        ->reject(fn($file) => str_ends_with($file, '.gitkeep'))
        ->reject(fn($file) => in_array($file, ['index.blade.php', 'sitemap.blade.php']))
        ->map(fn($file) => str_replace('/index.blade.php', '', $file))
        ->map(function ($file) {
            return [
                'filename' => str_replace('.blade.php', '', $file),
                'lastModified' => Carbon::createFromTimestamp(Storage::disk('pages')->lastModified($file))->toAtomString(),
            ];
        })
        ->all();
});
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ config('app.url') }}</loc>
    </url>
    @foreach($pages as $page)
        <url>
            <loc>{{ config('app.url') }}/{{ $page['filename'] }}</loc>
            <lastmod>{{ $page['lastModified'] }}</lastmod>
        </url>
    @endforeach
</urlset>
