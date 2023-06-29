---
slug: "life-with-tailwind"
title: "Life with Tailwind"
author: "Scott Zirkel"
date: "2020-11-17"
category: "code"
originalPost:
  site: "Medium"
  link: "https://medium.com/p/d4d094b606b5"
tags:
  - "tailwind"
  - "Tailwind CSS"
blurb: "I've been using Tailwind CSS for several years now, so I thought I'd give an update to my earlier posts."
---
![Photo by Safar Safarov on Unsplash](/articles/computer.webp)
*Photo by [Safar Safarov](https://unsplash.com/@codestorm?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText) on [Unsplash](https://unsplash.com/s/photos/coding?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText)*

If you’ve been following along, you know I’m a huge fan of [Tailwind CSS](https://tailwindcss.com/). And a pretty early adopter. I’ve documented [my first week](https://codeburst.io/a-week-with-tailwind-b5a5970b4093) (v0.1.4) and [my first year](https://medium.com/alara-creative/a-year-with-tailwind-92f420b2f8b9) (v0.6) with it.

This week Tailwind 2.0 comes out and I just thought I’d give an update on where I stand with it.

_I still love it._

I’ve been using it for each project I’ve done since it’s release in 2017. I haven’t touched another framework or written my own CSS (outside of a few custom bits here and there within Tailwind) and it’s been great. I’ve worked on small projects alone and very large projects with a team.

---

### Old Code Smell

I guess I should start with the older projects. It’s been a few years now, and I’ve had to go back and make updates, do maintenance… all the fun things that come with development. If I open a pre-Tailwind site, I never know what to expect. Was I using BEM? Was I using one CSS or a whole bunch that the pre-processor put together. Was it PostCSS, SCSS, LESS? And then I had to figure out the naming scheme we were using at the time. Not always easy to remember the difference between `primary_nav` and `main_nav` a few years later.

Opening an older Tailwind site and I know what everything is without having to think. Also, I can scan the classes and get a pretty good picture of what it will look like without diving into ancient dusty CSS files.

![Photo by NOAA on Unsplash](https://miro.medium.com/max/1400/1*kLtmxyw8BBaUw_c0qCeAxQ.webp)
*This image has nothing to do with the article. I just thought it was cool. Photo by [NOAA](https://unsplash.com/@noaa?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText) on [Unsplash](https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText)*

---

### Team Player

This past year I began a new job and am now working with a much larger team. Previously it was just myself and one other developer. With this new team we had many projects that used Bootstrap, custom CSS, or a mix. For anything new I brought in Tailwind and the team was able to pick it up almost immediately. We are phasing out some of the older code and replacing it with a full TALL stack. Tailwind in a component setting is where it really shines. No more trying to come up with descriptive names for full component designs or wondering if they already exist some place else.

And, of course, to keep things looking too similar, it’s very easy to extend the config file and change up the site colors. Helpful for one of our apps which serves multiple templated domains.

---

### Tailwind UI

Another amazing thing to come out of Tailwind this year was [Tailwind UI.](https://tailwindui.com) Tailwind UI is a licensed group of pre-built elements using Tailwind and occasionally a small smattering of JS (thanks [Alpline](https://github.com/alpinejs/alpine)!). For the UI builds, this has been an amazing way to quickly add components with little to no customization. I don’t have any metrics on how much faster things are now, but I’m sure it’s a number you’d be impressed by, so we’ll just go with that.

How will Tailwind shape things moving forward? I honestly don’t know, but for someone who was been writing CSS since the 20th century, it’s really great to simply not think about anymore.
