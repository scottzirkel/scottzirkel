<dl class="sm:w-2/3 space-y-2">
    @foreach($parts as $part)
        <div class="flex items-center gap-4">
            <dt class="shrink-0 sm:text-base font-semibold">Part {{ $loop->iteration }}</dt>
            <div class="bg-gradient-to-b from-gray-200 via-gray-100 to-gray-200 h-6 w-full rounded-full border-2 border-gray-400 inner-shadow">
                @if ($part)
                    <dd class="bg-sky-500 w-current border-2 border-sky-600 h-full rounded-full">
                        <span class="sr-only">{{ $part }}%</span>
                    </dd>
                @else
                    <dd>
                        <span class="sr-only">0%</span>
                    </dd>
                @endif
            </div>
        </div>
    @endforeach
</dl>
