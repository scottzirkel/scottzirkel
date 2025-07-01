<?php

namespace Scott\Design\Http\Controllers;

class DesignJsonController
{
    public function __invoke()
    {
        return response()->json([
            'title' => 'Design by Scott Zirkel',
            'description' => 'Although I have unofficially retired from the design world, I wanted to have a place to showcase some of my favorite pieces from the past.',
            'dribbble' => [
                [
                    'title' => 'The Mostly True Adventures of the Walsh Twins',
                    'caption' => 'A comic idea Courtney Huddleston and I pitched.',
                    'image' => 'https://cdn.dribbble.com/users/244519/screenshots/6626854/walsh-twins.png?resize=800x600&vertical=center',
                    'url' => 'https://dribbble.com/shots/6626854-The-mostly-True-Adventures-of-the-Walsh-Twins?utm_source=Clipboard_Shot&utm_campaign=scottzirkel&utm_content=The%20(mostly)%20True%20Adventures%20of%20the%20Walsh%20Twins&utm_medium=Social_Share',
                ],
                [
                    'title' => 'Dice not Mice',
                    'caption' => 'Dice not Mice',
                    'image' => 'https://cdn.dribbble.com/users/244519/screenshots/4508653/media/7359b4c76bff845491b21e80fe1d785e.png?resize=800x600&vertical=center',
                    'url' => 'https://dribbble.com/shots/4508653-Dice-Not-Mice-Updated?utm_source=Clipboard_Shot&utm_campaign=scottzirkel&utm_content=Dice%20Not%20Mice%20Updated&utm_medium=Social_Share',
                ],
                [
                    'title' => 'Jeep sticker design',
                    'caption' => 'Sticker design for my Jeep',
                    'image' => 'https://cdn.dribbble.com/users/244519/screenshots/2653765/dribble-2.jpg?resize=800x600&vertical=center',
                    'url' => 'https://dribbble.com/shots/2653765-Jeep-Sticker?utm_source=Clipboard_Shot&utm_campaign=scottzirkel&utm_content=Jeep%20Sticker&utm_medium=Social_Share',
                ],
                [
                    'title' => 'Zirkel & Sons Garage - Accumulating spare parts since 1993',
                    'caption' => 'Personal shirt design for my family',
                    'image' => 'https://cdn.dribbble.com/users/244519/screenshots/2731930/media/bd06525d2a6ba33457402ab931a27f35.png?resize=800x600&vertical=center',
                    'url' => 'https://dribbble.com/shots/2731930-Zirkel-Sons-Garage?utm_source=Clipboard_Shot&utm_campaign=scottzirkel&utm_content=Zirkel%20%26%20Sons%20Garage&utm_medium=Social_Share',
                ],
                [
                    'title' => "Let's go exploring",
                    'caption' => 'T-shirt design - with help from my daughter',
                    'image' => 'https://cdn.dribbble.com/users/244519/screenshots/2739784/exploring-dribbble.png?resize=800x600&vertical=center',
                    'url' => 'https://dribbble.com/shots/2731930-Zirkel-Sons-Garage?utm_source=Clipboard_Shot&utm_campaign=scottzirkel&utm_content=Zirkel%20%26%20Sons%20Garage&utm_medium=Social_Share',
                ],
                [
                    'title' => 'Explore The World, maps optional',
                    'caption' => 'T-shirt design',
                    'image' => 'https://cdn.dribbble.com/users/244519/screenshots/2784895/media/ed5dd5207c5d43c2011ae413e30398c0.png?resize=800x600&vertical=center',
                    'url' => 'https://dribbble.com/shots/2784895-Explore-The-World-Take-2?utm_source=Clipboard_Shot&utm_campaign=scottzirkel&utm_content=Explore%20The%20World%20-%20Take%202&utm_medium=Social_Share',
                ],
            ],
            'professional' => [
                'summary' => 'For 10 years I worked as designer, then Creative Director of Alara Creative, a bespoke marketing firm. I was able to work with a variety of clients on a myriad of projects.',
                'note' => "TODO: Drop in logos, package design, web design, etc, BEFORE launch. Otherwise people will see this and think you're a poser.",
            ],
        ]);
    }
}
