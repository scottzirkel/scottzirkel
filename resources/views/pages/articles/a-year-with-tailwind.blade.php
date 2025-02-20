<x-app-layout :divider="true">
    <x-slot:title>A Year with Tailwind</x-slot:title>
    <x-slot:description>A year-ish ago I started using TailwindCSS from Adam Wathan. If you haven’t heard of it, you might want to check out my previous post, A Week With Tailwind in which I cover my first week with…</x-slot:description>
    <x-slot:structured>
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "BlogPosting",
              "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://scottzirkel.com/articles/a-year-with-tailwind"
              },
              "headline": "A Year With Tailwind",
              "description": "My experience with TailwindCSS after my first year of using it.",
              "image": "https://scottzirkel.test/articles/tailwind-css.webp",
              "author": {
                "@type": "Person",
                "name": "Scott Zirkel",
                "url": "https://scottzirkel.com"
              },
              "publisher": {
                "@type": "Organization",
                "name": "Alara Strategic + Creative",
                "logo": {
                  "@type": "ImageObject",
                  "url": "https://alaracreative.com/assets/branding/alara-creative-header-logo.png"
                }
              },
              "datePublished": "2018-11-06"
            }
        </script>
    </x-slot:structured>
    <header>
        <h2 class="font-title text-4xl">A Year with Tailwind</h2>
        <p class="text-lg italic">Originally posted on 2018-11-06 at <a href="https://medium.com/alara-creative/a-year-with-tailwind-92f420b2f8b9" target="_blank" rel="noreferrer" class="text-red-500 hover:text-red-700">Medium</a></p>
    </header>
    <div class="article">
        <h3>A Year With Tailwind</h3>
        <p>
            <img src="{{ asset('articles/tailwind-css.webp') }}" alt="Tailwind CSS - A utility-first CSS framework for rapid UI development">
        </p>
        <p><strong>UPDATE:</strong> I’ve been using Tailwind for years. <a href="/articles/life-with-tailwind">I have updated thoughts!</a></p>
        <p>A year-ish ago I started using <a href="https://tailwindcss.com">TailwindCSS</a> from <a href="https://twitter.com/adamwathan/">Adam Wathan</a>. If you haven’t heard of it, you might want to check out my previous post, <a href="https://codeburst.io/a-week-with-tailwind-b5a5970b4093">A Week With Tailwind</a> in which I cover my first week with Tailwind. I’m not good at naming things.</p>
        <p>Now that it’s been out a year, I figured I’d do a follow up post and let everyone know that, yes, I’m still using Tailwind. It has found its way into every project we do here at <a href="https://alaracreative.com">Alara</a>. It doesn’t matter if it’s a simple <a href="https://statamic.com">Statamic</a> brochure site or a more sophisticated Laravel or Nuxt site, we always start with Tailwind. I even made a Tailwind Sketch file so our non-coding designers could play too. I’d share it, but we have some other in-house objects in there and Sketch has been crashing often for me, so no.</p>
        <p>Even after all these months using it, it’s interesting to see the same objections being thrown at it, before anyone even tries it. I’m not sure why that is, but give it a chance gang, you’ll like it. In the meantime, I’ll try to tackle a few of those objections.</p>
        <hr>
        <h3>It’s too hard to maintain long-term</h3>
        <p>In the last year, we have had to go back to older projects, some from before the previous year, some within. The sites that aren’t using tailwind are actually a bit of a pain to work on. Mostly due to Grunt/Gulp files that no longer compile due to non-compatible components. Since we maintain hundreds of clients over many years, it’s not feasible to keep all the components up-to-date at all times, so when they need updates, we have to update.</p>
        <p>With Tailwind projects, we can largely skip that entire process. Just a few tweaks to an html or blade file and we’re up and running. A large part of those can be done from github.com without pulling any code. A big time saver when the client just wants a couple of small changes. I know, I know, don’t edit on the server, whatever I can do what I want. I’m a rebel Dottie, a loner.</p>
        <hr>
        <h3>Too many classes leave the markup looking ugly</h3>
        <p>All those classes that “litter” the HTML? Yeah, they still do. And I’m still OK with it. If the line gets unwieldy long, I’ll either drop the attributes to their own line Vue style, or will just create a component and actually use the CSS file. I can probably count on one hand the number of times I’ve done that.</p>
        <p>Speaking of Vue, as of version 0.6 or something of Tailwind, you can now use <code>@apply</code> in your Vue templates. That was huge in the last large scale Vue/Nuxt project we did. Scoped styles in the components are quite useful. And portable. Now the styles aren’t in a CSS file someone has to go hunt down later, they are just at the bottom of the template. Simple.</p>
        <hr>
        <h3>Everything looks the same</h3>
        <p>So one of my initial points was that Bootstrap made all the sites look the same. Isn’t that the same with Tailwind? Don’t all the sites look the same? Well, yes and no. When I’m building a backend, I usually just use a default Tailwind config file. Very few changes, and those are usually adding in custom padding or margins to fit what I need. So yeah, all the UI I do for backend admin panels look similar. I <em>might</em> change the primary color to match the brand. Depends on the client.</p>
        <p>Front end design? Not similar at all. Here’s <a href="https://downtownkerrville.com">a site we did for our hometown</a>, Kerrville, Texas. Now here’s one we did for <a href="https://billsbbq.net/">a local BBQ joint.</a> Not too similar. For better examples, hit up <a href="http://builtwithtailwind.com/">Built with Tailwind</a>.</p>
        <figure class="my-4">
            <img class="w-full" src="{{ asset('articles/downtown-kerrville.webp') }}" alt="Screenshot of downtownkerrville.com" />
            <figcaption class="text-base text-center pt-2">*I can see my office from here!</figcaption>
        </figure>
        <p>Again, you’ll get what you put into it. Spend time using the tools and crafting a design, you’ll get an easy to update codebase that looks unique. Just using the default Tailwind config? That’s cool, you’ll have a really clean looking site that is again, easy to update in the future.</p>
        <hr>
        <h3>Third-party fun</h3>
        <p>Extending Tailwind has also been helpful. There are a few good plugins out there, but creating your own is pretty simple. One of my favorites is <a href="https://github.com/webdna/tailwindcss-aspect-ratio">Aspect Ratio</a> I use it pretty often.</p>
        <p>Another third-party tool that has been helpful for our team is <a href="https://javisperez.github.io/tailwindcolorshades/">Tailwind Color Generator</a>. Pop in a hex value and it generates the light/dark shades for you. I’ve only had one or two that needed tweaking, for the most part it hits the mark.</p>
        <hr>
        <h3>Are you still here?</h3>
        <p>Bottom line, for our team Tailwind is here to stay. It’s being used in official Laravel packages, Nuxt has it as a setup option, even Pizza Hut (UK) is using it. If you haven’t given it a go yet, what’s stopping you?</p></div>
</x-app-layout>
