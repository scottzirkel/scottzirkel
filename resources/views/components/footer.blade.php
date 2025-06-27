<footer class="text-center font-sans">
    <section class="bg-gray-100 pb-8">
        <h3 class="sr-only">Social Media Links</h3>
        <div class="mx-auto max-w-2xl space-y-6">
            <nav class="mb-4 space-y-4 text-gray-800">
                <ul class="flex items-center justify-center gap-4">
                    <li><a href="https://t.me/scottzirkel" class="block size-6" target="_blank" rel="me">
                        <x-si-telegram title="Contact me" class="hover:text-red-500" />
                    </a></li>
                    <li><a href="https://www.facebook.com/writerandartistscottzirkel" class="block size-6" target="_blank" rel="me">
                        <x-si-facebook title="Facebook" class="hover:text-red-500" />
                    </a></li>
                    <li><a href="https://twitter.com/scottzirkel" class="block size-6" target="_blank" rel="me">
                        <x-si-x title="Twitter Forever" class="hover:text-red-500" />
                    </a></li>
                    <li><a href="https://www.instagram.com/scottzirkel/" class="block size-6" target="_blank" rel="me">
                        <x-si-instagram title="Instagram" class="hover:text-red-500" />
                    </a></li>
                    <li><a href="https://dribbble.com/scottzirkel" class="block size-6" target="_blank" rel="me">
                        <x-si-dribbble title="Dribbble" class="hover:text-red-500" />
                    </a></li>
                    <li><a href="https://github.com/scottzirkel/" class="block size-6" target="_blank" rel="me">
                        <x-si-github title="Github" class="hover:text-red-500" />
                    </a></li>
                    <li><a href="https://scottzirkel.substack.com" class="block size-6" target="_blank" rel="me">
                        <x-si-substack title="Substack Newsletter" class="hover:text-red-500" />
                    </a></li>
                </ul>
                <div>
                    <h4>Archived but not forgotten</h4>
                    <ul class="flex items-center justify-center gap-4 opacity-50">
                        <li>
                            <a href="https://medium.com/@scottzirkel/" class="block size-6" target="_blank" rel="me">
                                <x-si-medium title="Medium" class="hover:text-red-500" />
                            </a>
                        </li>
                        <li>
                            <a href="https://behance.net/scottzirkel" class="block size-6" target="_blank" rel="me">
                                <x-si-behance title="Behance Portfolio" class="hover:text-red-500" />
                            </a>
                        </li>
                        <li>
                            <a href="https://scottzirkel.deviantart.com/" class="block size-6" target="_blank" rel="me">
                                <x-si-deviantart title="DeviantArt Portfolio" class="hover:text-red-500" />
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="font-sans text-sm text-gray-800">
                    Feel free to contact me through your favorite social media network.
                </p>
                <p class="font-sans text-sm text-gray-800">Copyright © 1977–{{ now()->format('Y') }} Scott Zirkel. All Rights Reserved.</p>
            </nav>
        </div>
    </section>
    <x-weird />
</footer>
