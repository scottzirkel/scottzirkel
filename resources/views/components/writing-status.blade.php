<div class="sm:w-2/3 mx-auto space-y-2 rounded-xl bg-white ring-1 p-4 ring-gray-600">
    <div>
        <h2 class="font-title text-2xl">Current Project</h2>
        <div class="flex gap-4">
            <p class="text-base"><span class="font-subtitle">Title:</span> <span class="italic">{{ $title }}</span></p>
            <p class="text-base"><span class="font-subtitle">Status:</span> <span class="italic">{{ $status }}</span></p>
        </div>
    </div>
    <dl class="sm:w-2/x3 space-y-2">
        @foreach($parts as $part)
            <div class="flex items-center gap-4">
                <dt class="shrink-0 sm:text-base">
                    <p class="font-subtitle">Part {{ $loop->iteration }}</p>
                    <p class="font-sans text-sm">{{ $part['status'] }}</p>
                </dt>
                <dd title="{{ $part['status'] }}" class="bg-gradient-to-b from-gray-200 via-gray-100 to-gray-200 h-6 w-full rounded-full border-2 border-gray-400 inner-shadow">
                    @if ($part['progress'])
                        <div x-ref="progress" class="bg-sky-500 w-full border-2 border-sky-600 h-full rounded-full">
                            <span class="sr-only">{{ $part['progress'] }}%</span>
                        </div>
                    @else
                        <div x-ref="noProgress">
                            <span class="sr-only">0%</span>
                        </div>
                    @endif
                </dd>
            </div>
        @endforeach
    </dl>
</div>
