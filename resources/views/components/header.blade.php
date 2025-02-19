<header class="space-y-4 bg-gray-50 pt-8 md:pt-16 border-t-8 border-red-500">
    <div class="mx-auto text-center leading-none">
        <h1
            class="font-title text-5xl uppercase text-red-500 lg:text-6xl"
            style="font-variant-ligatures: discretionary-ligatures"
        >
            <a href="/">Scott Zirkel</a>
        </h1>
        <h2 class="font-subtitle text-2xl uppercase text-gray-900 lg:text-3xl">Making stuff up since 1977</h2>
    </div>
    <nav class="m-4 space-y-2 text-center leading-tight lg:mt-0">
        <div class="flex items-center justify-center space-x-4">
            <a class="{{ request()->segment(1) === 'drawings' ? 'text-red-500' : 'text-gray-900 hover:text-red-500' }} hover:rotate-[-3deg] font-subtitle text-2xl uppercase md:text-3xl lg:text-4xl" href="/drawings">
                Drawings
            </a>
            <a class="{{ request()->segment(1) === 'writing' ? 'text-red-500' : 'text-gray-900 hover:text-red-500' }} hover:rotate-[2deg] font-subtitle text-2xl uppercase md:text-3xl lg:text-4xl" href="/writing">Writing</a>
            <a class="{{ request()->segment(1) === 'design' ? 'text-red-500' : 'text-gray-900 hover:text-red-500' }} hover:rotate-[-4deg] font-subtitle text-2xl uppercase md:text-3xl lg:text-4xl" href="/design">Design</a>
            <a class="{{ request()->segment(1) === 'code' ? 'text-red-500' : 'text-gray-900 hover:text-red-500' }} hover:rotate-[180deg] font-subtitle text-2xl uppercase md:text-3xl lg:text-4xl" href="/code">Code</a>
        </div>
        <div class="flex items-center justify-center space-x-4">
            <a class="group relative block font-subtitle text-2xl text-red-500" href="/uses">
                <span class="relative z-10">Uses</span>
                <span class="-mx-1 {{ request()->segment(1) === 'uses' ? 'bg-gray-600/25' : 'group-hover:bg-gray-600/25' }} absolute inset-0 z-0 my-4 h-4 w-full rounded"></span>
            </a>
            <a class="group relative block font-subtitle text-2xl text-red-500" href="/been-there-done-that">
                <span class="relative z-10">Been There Done That</span>
                <span class="mx-1  {{ request()->segment(1) === 'been-there-done-that' ? 'bg-gray-600/25' : 'group-hover:bg-gray-600/25' }} absolute inset-0 z-0 my-4 h-4 w-full rounded"></span>
            </a>
        </div>
    </nav>
</header>
