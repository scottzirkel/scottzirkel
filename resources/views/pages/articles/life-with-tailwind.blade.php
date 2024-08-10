@inject('storage', 'Illuminate\Support\Facades\Storage')
<x-app-layout>
    <header>
        <h2 class="font-title text-4xl">Life with Tailwind</h2>
        <p class="text-lg italic">
            Originally posted on 2020-11-17 at <a href="https://medium.com/p/d4d094b606b5" target="_blank" rel="noreferrer" class="text-red-500 hover:text-red-700">Medium</a>
        </p>
    </header>
    <div class="article">
        <p>
            <img src="{{ $storage::url('articles/computer.webp') }}" alt="Photo by Safar Safarov on Unsplash">
            <em>Photo by <a href="https://unsplash.com/@codestorm?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Safar Safarov</a> on <a href="https://unsplash.com/s/photos/coding?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></em></p>
        <p>If you’ve been following along, you know I’m a huge fan of <a href="https://tailwindcss.com/">Tailwind CSS</a>. And a pretty early adopter. I’ve documented <a href="https://codeburst.io/a-week-with-tailwind-b5a5970b4093">my first week</a> (v0.1.4) and <a href="https://medium.com/alara-creative/a-year-with-tailwind-92f420b2f8b9">my first year</a> (v0.6) with it.</p>
        <p>This week Tailwind 2.0 comes out and I just thought I’d give an update on where I stand with it.</p>
        <p><em>I still love it.</em></p>
        <p>I’ve been using it for each project I’ve done since it’s release in 2017. I haven’t touched another framework or written my own CSS (outside of a few custom bits here and there within Tailwind) and it’s been great. I’ve worked on small projects alone and very large projects with a team.</p>
        <hr>
        <h3>Old Code Smell</h3>
        <p>I guess I should start with the older projects. It’s been a few years now, and I’ve had to go back and make updates, do maintenance… all the fun things that come with development. If I open a pre-Tailwind site, I never know what to expect. Was I using BEM? Was I using one CSS or a whole bunch that the pre-processor put together. Was it PostCSS, SCSS, LESS? And then I had to figure out the naming scheme we were using at the time. Not always easy to remember the difference between <code>primary_nav</code> and <code>main_nav</code> a few years later.</p>
        <p>Opening an older Tailwind site and I know what everything is without having to think. Also, I can scan the classes and get a pretty good picture of what it will look like without diving into ancient dusty CSS files.</p>
        <p>
            <img src="https://miro.medium.com/max/1400/1*kLtmxyw8BBaUw_c0qCeAxQ.webp" alt="Photo by NOAA on Unsplash">
            <em>This image has nothing to do with the article. I just thought it was cool. Photo by <a href="https://unsplash.com/@noaa?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">NOAA</a> on <a href="https://unsplash.com/?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></em></p>
        <hr>
        <h3>Team Player</h3>
        <p>This past year I began a new job and am now working with a much larger team. Previously it was just myself and one other developer. With this new team we had many projects that used Bootstrap, custom CSS, or a mix. For anything new I brought in Tailwind and the team was able to pick it up almost immediately. We are phasing out some of the older code and replacing it with a full TALL stack. Tailwind in a component setting is where it really shines. No more trying to come up with descriptive names for full component designs or wondering if they already exist some place else.</p>
        <p>And, of course, to keep things looking too similar, it’s very easy to extend the config file and change up the site colors. Helpful for one of our apps which serves multiple templated domains.</p>
        <hr>
        <h3>Tailwind UI</h3>
        <p>Another amazing thing to come out of Tailwind this year was <a href="https://tailwindui.com">Tailwind UI.</a> Tailwind UI is a licensed group of pre-built elements using Tailwind and occasionally a small smattering of JS (thanks <a href="https://github.com/alpinejs/alpine">Alpline</a>!). For the UI builds, this has been an amazing way to quickly add components with little to no customization. I don’t have any metrics on how much faster things are now, but I’m sure it’s a number you’d be impressed by, so we’ll just go with that.</p>
        <p>How will Tailwind shape things moving forward? I honestly don’t know, but for someone who was been writing CSS since the 20th century, it’s really great to simply not think about anymore.</p></div>
</x-app-layout>
