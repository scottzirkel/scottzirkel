---
slug: "a-week-with-tailwind"
title: "A Week with Tailwind"
author: "Scott Zirkel"
date: "2017-11-07"
category: "code"
bannerImage: "https://miro.medium.com/v2/resize:fit:720/format:webp/1*xAFAiAxqZVrOVLBTo9tf6w.jpeg"
originalPost:
  site: "Codeburst on Medium"
  link: "https://codeburst.io/a-week-with-tailwind-b5a5970b4093"
tags:
  - "tailwind"
  - "Tailwind CSS"
blurb: "I've been using the new Tailwind CSS for a week now, here are my impressions."
---

### A Week with Tailwind

Photo by [Émile Perron](https://unsplash.com/photos/xrVDYZRGdw4?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText) on [Unsplash](https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText)

**UPDATE:** I’ve been using Tailwind for over a year now. I have updated thoughts! [https://medium.com/alara-creative/a-year-with-tailwind-92f420b2f8b9](https://medium.com/alara-creative/a-year-with-tailwind-92f420b2f8b9)

Since [Tailwind](https://tailwindcss.com) came out last week, I’ve been using it to build a site for a client. I know it’s still very early (it’s currently at 0.1.4 as of this writing), but what better way to learn something new than to use it in real life?

If you haven’t heard of Tailwind yet, I highly recommend you go check out the intro and the docs. It’s a bit different in its approach to markup, and that really throws a lot of people off. At first I didn’t really get it, but after watching co-creator [Adam Wathan](https://medium.com/u/2bdb4734b294?source=post_page-----b5a5970b4093--------------------------------) [demo it live on YouTube](https://www.youtube.com/watch?v=ZrRRMBaz5Z0), I could see the reasoning.

This particular client is a real estate agency, so it’s mostly a brochure site with [CraftCMS](https://craftcms.com) doing the heavy lifting for the property searches. For client sites like these, we usually build them out and turn them over for the client to manage. So it’s not like an ongoing application that we will be constantly adding to. Besides, if there is a breaking change in the future, I can lock down the version in my `package.json` and everything will work lovely.

---

### Eww gross, look at all those classes!

To address the main sticking point everyone has, yes, you will be “writing CSS” in your html. No it’s not actually how it sounds. Since Tailwind utilizes utility classes for most of its styles, your markup will become a bit class heavy. It does look a bit ugly, but wow, is it effective. 90% of the styles I used are straight from Tailwind, the other 10% are Tailwind-esque classes that I added in that were more applicable for my project. For instance, the opacity setting is quartered from 0–100%, and of course, I needed 80% opacity. I just created a class in my CSS called `opacity-80` and set the opacity to .6. Nothing ground-breaking, but the syntax fits within Tailwind, and it now looks like I wanted it to. Easy and quick. I could just have easily named it `.semantically__named--bem-class` and gone from there, but I didn’t want to start muddying my markup with two flavors of class names.

In another case, I wanted the drop shadow of a button to increase on hover. Simple fix! I again followed the Tailwind syntax and simply applied the existing Tailwind class.

```
.hover\:shadow-md-hover {  
  @apply .shadow-md  
}
```

The `@apply` serves as a way to inject an existing class into a new class definition. Works great, though I do wish there were hovers on the drop shadows by default.

Other than a few custom colors I needed (added in the `tailwind.js` config file), the only non-Tailwind modification I had to write in CSS was a class for a background image.

---

### Make the site look 34% less Bootstrappy please.

When Bootstrap first came out, I was impressed by how quickly it aided in markup, but was quickly worried that every site we did would look like it was Bootstrapped. Looking back on the sites I built during that time, they definitely have that look. That’s true of any framework really. The beauty of Tailwind is that it is simply a set of utility classes with no UI or themes to dictate how your site should look. From the Tailwind docs:

> “Creating a framework for building custom UIs means you can’t provide abstractions at the usual level of buttons, forms, cards, navbars, etc.
>
> Instead, Tailwind provides highly composable, low-level _utility classes_ that make it easy to build complex user interfaces **without encouraging any two sites to look the same.”**

When I finished, I passed it over to a teammate who had only heard me talk about Tailwind. Without reading any of the docs he was able to pick up on the syntax and follow along with what I had written.

---

### Sayonara CSS! But don’t go too far…

I’m looking forward to using Tailwind in upcoming projects and, as it finds stability, even some of my own non-client Laravel applications.

Tailwind is still shiny and new, and as such there a few things that aren’t as polished as you want them to be. The documentation is very well written, but still is a work in progress. There are a few classes that don’t exist but probably should. (`.cover { object-fit: cover }` would be handy!) Overall, Tailwind is something you should have on your radar. Unless you’re a plumber, which, I have to ask, why are you still reading this?
