<x-app-layout>
    <p>
        Hey gang,
        <mark class="inline-block px-1 bg-red-500 rotate-3 text-gray-50">
            <span class="inline-block -rotate-3">I'm Scott</span>
        </mark>
        and this is my site (obviously). I'm an artist, a programmer, a writer, a designer, a father of two, a husband of one, a Jeeper, an
        overlander, and probably a dozen other things I've forgotten.
    </p>
    <p>
        I've got a few drawings, some writing, and other things
        <mark class="inline-block px-1 bg-red-500 -rotate-1 text-gray-50">
            <span class="inline-block rotate-1">scattered throughout the site</span>
        </mark>
        and across various social media platforms. I do hope you find something you enjoy.
    </p>
    <p>
        Your pal,
        <br />
        <span class="text-2xl font-title" style="font-variant-ligatures: discretionary-ligatures">Scott</span>
    </p>
    @php($brace = app('brace'))
    <x-writing-status :title="$brace['title']" :status="$brace['status']" :parts="$brace['parts']" />
</x-app-layout>
