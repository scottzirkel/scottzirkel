<x-app-layout :divider="true">
    <x-slot:title>A Week With Tailwind</x-slot:title>
    <x-slot:description>Since Tailwind came out last week, I’ve been using it to build a site for a client. I know it’s still very early (it’s currently at 0.1.4 as of this writing), but what better way to learn something…</x-slot:description>
    <x-slot:structured>
        @verbatim
        <script type="application/ld+json" @cspNonce>
            {
              "@context": "https://schema.org",
              "@type": "BlogPosting",
              "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://scottzirkel.com/articles/a-week-with-tailwind"
              },
              "headline": "A Week With Tailwind",
              "description": "My experience with TailwindCSS after using it for a week.",
              "image": "https://miro.medium.com/v2/resize:fit:4800/format:webp/1*xAFAiAxqZVrOVLBTo9tf6w.jpeg",
              "author": {
                "@type": "Person",
                "name": "Scott Zirkel",
                "url": "https://scottzirkel.com"
              },
              "publisher": {
                "@type": "Organization",
                "name": "codeburst",
                "logo": {
                  "@type": "ImageObject",
                  "url": "https://cdn-images-1.medium.com/max/392/1*LC0hwOq4FY2CG5F9W7R34Q@2x.png"
                }
              },
              "datePublished": "2017-11-07T12:00:00-06:00"
            }
        </script>
        @endverbatim
    </x-slot:structured>
    <header>
        <h2 class="font-title text-4xl">A Week with Tailwind</h2>
        <p class="text-lg italic">Originally posted on 2017-11-07 at <a href="https://codeburst.io/a-week-with-tailwind-b5a5970b4093" target="_blank" rel="noreferrer" class="text-red-500 hover:text-red-700">Codeburst on Medium</a></p>
    </header>
    <div class="article">
        <h3>A Week with Tailwind</h3>
        <img src="https://miro.medium.com/v2/resize:fit:4800/format:webp/1*xAFAiAxqZVrOVLBTo9tf6w.jpeg" alt="Computer on desk" />
        <p>Photo by <a href="https://unsplash.com/photos/xrVDYZRGdw4?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Émile Perron</a> on <a href="https://unsplash.com/?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></p>
        <p><strong>UPDATE:</strong> I’ve been using Tailwind for over a year now. <a href="/articles/a-year-with-tailwind">I have updated thoughts!</a></p>
        <p>Since <a href="https://tailwindcss.com">Tailwind</a> came out last week, I’ve been using it to build a site for a client. I know it’s still very early (it’s currently at 0.1.4 as of this writing), but what better way to learn something new than to use it in real life?</p>
        <p>If you haven’t heard of Tailwind yet, I highly recommend you go check out the intro and the docs. It’s a bit different in its approach to markup, and that really throws a lot of people off. At first I didn’t really get it, but after watching co-creator <a href="https://medium.com/u/2bdb4734b294?source=post_page-----b5a5970b4093--------------------------------">Adam Wathan</a> <a href="https://www.youtube.com/watch?v=ZrRRMBaz5Z0">demo it live on YouTube</a>, I could see the reasoning.</p>
        <p>This particular client is a real estate agency, so it’s mostly a brochure site with <a href="https://craftcms.com">CraftCMS</a> doing the heavy lifting for the property searches. For client sites like these, we usually build them out and turn them over for the client to manage. So it’s not like an ongoing application that we will be constantly adding to. Besides, if there is a breaking change in the future, I can lock down the version in my <code>package.json</code> and everything will work lovely.</p>
        <hr>
        <h3>Eww gross, look at all those classes!</h3>
        <p>To address the main sticking point everyone has, yes, you will be “writing CSS” in your html. No it’s not actually how it sounds. Since Tailwind utilizes utility classes for most of its styles, your markup will become a bit class heavy. It does look a bit ugly, but wow, is it effective. 90% of the styles I used are straight from Tailwind, the other 10% are Tailwind-esque classes that I added in that were more applicable for my project. For instance, the opacity setting is quartered from 0–100%, and of course, I needed 80% opacity. I just created a class in my CSS called <code>opacity-80</code> and set the opacity to .6. Nothing ground-breaking, but the syntax fits within Tailwind, and it now looks like I wanted it to. Easy and quick. I could just have easily named it <code>.semantically__named--bem-class</code> and gone from there, but I didn’t want to start muddying my markup with two flavors of class names.</p>
        <p>In another case, I wanted the drop shadow of a button to increase on hover. Simple fix! I again followed the Tailwind syntax and simply applied the existing Tailwind class.</p>
        <pre><code>.hover\:shadow-md-hover {
  @apply .shadow-md
}</code></pre>
        <p>The <code>@apply</code> serves as a way to inject an existing class into a new class definition. Works great, though I do wish there were hovers on the drop shadows by default.</p>
        <p>Other than a few custom colors I needed (added in the <code>tailwind.js</code> config file), the only non-Tailwind modification I had to write in CSS was a class for a background image.</p>
        <hr>
        <h3>Make the site look 34% less Bootstrappy please.</h3>
        <p>When Bootstrap first came out, I was impressed by how quickly it aided in markup, but was quickly worried that every site we did would look like it was Bootstrapped. Looking back on the sites I built during that time, they definitely have that look. That’s true of any framework really. The beauty of Tailwind is that it is simply a set of utility classes with no UI or themes to dictate how your site should look. From the Tailwind docs:</p>
        <blockquote>
            <p>“Creating a framework for building custom UIs means you can’t provide abstractions at the usual level of buttons, forms, cards, navbars, etc.</p>
            <p>Instead, Tailwind provides highly composable, low-level <em>utility classes</em> that make it easy to build complex user interfaces <strong>without encouraging any two sites to look the same.”</strong></p>
        </blockquote>
        <p>When I finished, I passed it over to a teammate who had only heard me talk about Tailwind. Without reading any of the docs he was able to pick up on the syntax and follow along with what I had written.</p>
        <hr>
        <h3>Sayonara CSS! But don’t go too far…</h3>
        <p>I’m looking forward to using Tailwind in upcoming projects and, as it finds stability, even some of my own non-client Laravel applications.</p>
        <p>Tailwind is still shiny and new, and as such there a few things that aren’t as polished as you want them to be. The documentation is very well written, but still is a work in progress. There are a few classes that don’t exist but probably should. (<code>.cover { object-fit: cover }</code> would be handy!) Overall, Tailwind is something you should have on your radar. Unless you’re a plumber, which, I have to ask, why are you still reading this?</p></div>
</x-app-layout>
