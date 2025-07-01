<header class="pt-8 space-y-4 bg-gray-50 border-t-8 border-red-500 md:pt-16">
    <hgroup class="mx-auto leading-none text-center">
        <h2
            class="text-5xl text-red-500 uppercase font-title lg:text-6xl ligatures"
        >
            <a href="/">Scott Zirkel</a>
        </h2>
        <h3 class="text-2xl text-gray-900 uppercase font-subtitle lg:text-3xl">Making stuff up since 1977</h3>
    </hgroup>
    <nav class="m-4 space-y-2 leading-tight text-center lg:mt-0">
        <div class="flex justify-center items-center space-x-4">
            <a class="{{ request()->segment(1) === 'drawings' ? 'text-red-500' : 'text-gray-900 hover:text-red-500' }} hover:rotate-[-3deg] font-subtitle text-2xl uppercase md:text-3xl lg:text-4xl" href="/drawings">
                Drawings
            </a>
            <a class="{{ request()->segment(1) === 'writing' ? 'text-red-500' : 'text-gray-900 hover:text-red-500' }} hover:rotate-[2deg] font-subtitle text-2xl uppercase md:text-3xl lg:text-4xl" href="/writing">Writing</a>
            <a class="{{ request()->segment(1) === 'design' ? 'text-red-500' : 'text-gray-900 hover:text-red-500' }} hover:rotate-[-4deg] font-subtitle text-2xl uppercase md:text-3xl lg:text-4xl" href="/design">Design</a>
            <a class="{{ request()->segment(1) === 'code' ? 'text-red-500' : 'text-gray-900 hover:text-red-500' }} hover:rotate-[180deg] font-subtitle text-2xl uppercase md:text-3xl lg:text-4xl" href="/code">Code</a>
        </div>
        <div class="flex justify-center items-center space-x-4">
            <a class="block relative text-2xl text-red-500 group font-subtitle" href="/uses">
                <span class="relative z-10">Uses</span>
                <span class="-mx-1 {{ request()->segment(1) === 'uses' ? 'bg-gray-600/25' : 'group-hover:bg-gray-600/25' }} absolute inset-0 z-0 my-4 h-4 w-full rounded"></span>
            </a>
            <a class="block relative text-2xl text-red-500 group font-subtitle" href="/been-there-done-that">
                <span class="relative z-10">Been There Done That</span>
                <span class="mx-1  {{ request()->segment(1) === 'been-there-done-that' ? 'bg-gray-600/25' : 'group-hover:bg-gray-600/25' }} absolute inset-0 z-0 my-4 h-4 w-full rounded"></span>
            </a>
        </div>
    </nav>
</header>
