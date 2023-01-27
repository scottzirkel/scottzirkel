import fireflyPreview from 'public/drawings/sketchcards/firefly-the-verse/preview.jpg'
import antmanPreview from 'public/drawings/sketchcards/marvel-ant-man/preview.jpg'
import ultronPreview from 'public/drawings/sketchcards/marvel-avengers-age-of-ultron/preview.jpg'
import legendaryPreview from 'public/drawings/sketchcards/marvel-legendary-3d/preview.jpg'
import esbPreview from 'public/drawings/sketchcards/empire-strikes-back-3d/preview.jpg'
import fairylandPreview from 'public/drawings/sketchcards/the-essence-of-fairyland/preview.jpg'
import mandyPreview from 'public/drawings/sketchcards/dean-yeagles-mandy/preview.jpg'
import galaxyPreview from 'public/drawings/sketchcards/star-wars-galaxy-iv/preview.jpg'
import indyPreview from 'public/drawings/sketchcards/indiana-jones-masterpieces/preview.jpg'
import zombiePreview from 'public/drawings/sketchcards/zombies-vs-cheerleaders/preview.jpg'
import deadPreview from 'public/drawings/sketchcards/dead-at-17/preview.webp'
import warlordPreview from 'public/drawings/sketchcards/warlord-of-mars/preview.jpg'
import hackPreview from 'public/drawings/sketchcards/hack-slash/preview.jpg'
import { StaticImageData } from 'next/image'

export type Sketchcard = {
  project: string
  preview?: StaticImageData
  year?: number | string
  company?: string
  slug?: string
  style?: string
  images?: Array<{
    link: string
    width: number
    height: number
  }>
}

export type Sketchcards = Array<Sketchcard>

export const sketchcards: Sketchcards = [
  {
    project: "Totally Radical 80's",
    company: 'Artists Unite',
    slug: 'totally-radical-80s',
  },
  {
    project: 'Firefly: The Verse',
    company: 'Upper Deck',
    preview: fireflyPreview,
    year: 2015,
    slug: 'firefly-the-verse',
    images: [
      { link: 'firefly-the-verse-01-scott-zirkel.jpg', width: 400, height: 556 },
      { link: 'firefly-the-verse-08-scott-zirkel.jpg', width: 400, height: 556 },
      { link: 'firefly-the-verse-02-scott-zirkel.jpg', width: 400, height: 300 },
      { link: 'firefly-the-verse-03-scott-zirkel.jpg', width: 400, height: 300 },
      { link: 'firefly-the-verse-04-scott-zirkel.jpg', width: 400, height: 300 },
      { link: 'firefly-the-verse-07-scott-zirkel.jpg', width: 400, height: 300 },
      { link: 'firefly-the-verse-05-scott-zirkel.jpg', width: 400, height: 556 },
      { link: 'firefly-the-verse-06-scott-zirkel.jpg', width: 400, height: 556 },
      { link: 'firefly-the-verse-09-scott-zirkel.jpg', width: 384, height: 560 },
    ],
  },
  {
    project: 'Marvel Ant-Man',
    company: 'Upper Deck',
    preview: antmanPreview,
    year: 2015,
    slug: 'marvel-ant-man',
    images: [
      { link: 'marvel-ant-man-01-scott-zirkel.jpg', width: 724, height: 1000 },
      { link: 'marvel-ant-man-02-scott-zirkel.jpg', width: 724, height: 1000 },
      { link: 'marvel-ant-man-03-scott-zirkel.jpg', width: 724, height: 1000 },
      { link: 'marvel-ant-man-04-scott-zirkel.jpg', width: 724, height: 1000 },
      { link: 'marvel-ant-man-05-scott-zirkel.jpg', width: 1318, height: 1000 },
      { link: 'marvel-ant-man-06-scott-zirkel.jpg', width: 990, height: 715 },
    ],
  },
  {
    project: 'Marvel Avengers: Age of Ultron',
    company: 'Upper Deck',
    preview: ultronPreview,
    year: 2015,
    slug: 'marvel-avengers-age-of-ultron',
    images: [
      { link: 'marvel-age-of-ultron-01-scott-zirkel.jpg', width: 719, height: 1000 },
      { link: 'marvel-age-of-ultron-02-scott-zirkel.jpg', width: 719, height: 1000 },
      { link: 'marvel-age-of-ultron-03-scott-zirkel.jpg', width: 719, height: 1000 },
      { link: 'marvel-age-of-ultron-04-scott-zirkel.jpg', width: 719, height: 1000 },
      { link: 'marvel-age-of-ultron-05-scott-zirkel.jpg', width: 719, height: 1000 },
      { link: 'marvel-age-of-ultron-06-scott-zirkel.jpg', width: 719, height: 1000 },
      { link: 'marvel-age-of-ultron-07-scott-zirkel.jpg', width: 1000, height: 715 },
      { link: 'marvel-age-of-ultron-08-scott-zirkel.jpg', width: 1000, height: 715 },
      { link: 'marvel-age-of-ultron-09-scott-zirkel.jpg', width: 1000, height: 715 },
    ],
  },
  {
    project: 'Marvel Legendary/3D',
    company: 'Upper Deck',
    preview: legendaryPreview,
    year: '2014/2015',
    slug: 'marvel-legendary-3d',
    images: [
      { link: 'marvel-legendary-01-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-02-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-03-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-04-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-05-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-06-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-07-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-08-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-09-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-10-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-11-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-12-scott-zirkel.jpg', width: 721, height: 1000 },
      { link: 'marvel-legendary-13-scott-zirkel.jpg', width: 1200, height: 842 },
    ],
  },
  {
    project: 'Hack/Slash',
    company: '5finity',
    year: 2012,
    preview: hackPreview,
    slug: 'hack-slash',
    style: 'single-column',
    images: [
      { link: 'hack-slash-01-scott-zirkel.jpg', width: 897, height: 250 },
      { link: 'hack-slash-02-scott-zirkel.jpg', width: 897, height: 250 },
    ],
  },
  {
    project: "P'Ups",
    company: '5finity',
    slug: 'pups',
  },
  {
    project: 'Warlord of Mars',
    company: 'Bregent/Dynamite',
    year: 2012,
    preview: warlordPreview,
    slug: 'warlord-of-mars',
    style: 'single-column',
    images: [
      { link: 'warlord-of-mars-01-scott-zirkel.jpg', width: 996, height: 700 },
      { link: 'warlord-of-mars-02-scott-zirkel.jpg', width: 996, height: 933 },
      { link: 'warlord-of-mars-03-scott-zirkel.jpg', width: 996, height: 700 },
      { link: 'warlord-of-mars-04-scott-zirkel.jpg', width: 996, height: 346 },
    ],
  },
  {
    project: 'Empire Strikes Back 3D',
    company: 'Topps',
    year: 2010,
    preview: esbPreview,
    slug: 'empire-strikes-back-3d',
    images: [
      { link: 'empire-strikes-back-01-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-02-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-03-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-04-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-05-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-06-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-07-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-08-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-09-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-10-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-11-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-12-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-13-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-14-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-15-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-16-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-17-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-18-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-19-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-20-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-21-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-22-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-23-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-24-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-25-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-26-scott-zirkel.jpg', width: 465, height: 1000 },
      { link: 'empire-strikes-back-27-scott-zirkel.jpg', width: 465, height: 496 },
    ],
  },
  {
    project: 'Dead@17',
    company: '5finity',
    preview: deadPreview,
    slug: 'dead-at-17',
    style: 'single-column',
    images: [
      { link: 'dead-at-17-01-scott-zirkel.jpg', width: 693, height: 240 },
      { link: 'dead-at-17-02-scott-zirkel.jpg', width: 693, height: 240 },
    ],
  },
  {
    project: 'The Essence of Fairyland',
    company: 'sadlittles.com',
    preview: fairylandPreview,
    slug: 'the-essence-of-fairyland',
    images: [
      { link: 'essence-of-fairyland-01-scott-zirkel.jpg', width: 460, height: 429 },
      { link: 'essence-of-fairyland-02-scott-zirkel.jpg', width: 460, height: 429 },
      { link: 'essence-of-fairyland-03-scott-zirkel.jpg', width: 766, height: 429 },
      { link: 'essence-of-fairyland-04-scott-zirkel.jpg', width: 460, height: 429 },
      { link: 'essence-of-fairyland-05-scott-zirkel.jpg', width: 460, height: 429 },
      { link: 'essence-of-fairyland-06-scott-zirkel.jpg', width: 460, height: 429 },
    ],
  },
  {
    project: 'Zombies vs Cheerleaders',
    company: '5finity',
    preview: zombiePreview,
    slug: 'zombies-vs-cheerleaders',
    images: [
      { link: 'zombies-vs-cheerleaders-01-scott-zirkel.jpg', width: 500, height: 1051 },
      { link: 'zombies-vs-cheerleaders-02-scott-zirkel.jpg', width: 500, height: 1039 },
      { link: 'zombies-vs-cheerleaders-03-scott-zirkel.jpg', width: 500, height: 1036 },
      { link: 'zombies-vs-cheerleaders-04-scott-zirkel.jpg', width: 500, height: 359 },
      { link: 'zombies-vs-cheerleaders-05-scott-zirkel.jpg', width: 900, height: 414 },
    ],
  },
  {
    project: "Dean Yeagle's Mandy",
    company: '5finity',
    year: 2009,
    preview: mandyPreview,
    slug: 'dean-yeagles-mandy',
    style: 'single-column',
    images: [{ link: 'mandy-scott-zirkel.jpg', width: 500, height: 347 }],
  },
  {
    project: 'Star Wars Galaxy IV',
    company: 'Topps',
    year: 2008,
    preview: galaxyPreview,
    slug: 'star-wars-galaxy-iv',
    images: [
      { link: 'star-wars-galaxy-vi-scott-zirkel-02.jpg', width: 534, height: 755 },
      { link: 'star-wars-galaxy-vi-scott-zirkel-03.jpg', width: 534, height: 755 },
      { link: 'star-wars-galaxy-vi-scott-zirkel-04.jpg', width: 534, height: 755 },
      { link: 'star-wars-galaxy-vi-scott-zirkel-05.jpg', width: 534, height: 755 },
      { link: 'star-wars-galaxy-vi-scott-zirkel-06.jpg', width: 534, height: 755 },
      { link: 'star-wars-galaxy-vi-scott-zirkel-07.jpg', width: 534, height: 755 },
      { link: 'star-wars-galaxy-vi-scott-zirkel-08.jpg', width: 534, height: 755 },
      { link: 'star-wars-galaxy-vi-scott-zirkel-09.png', width: 529, height: 504 },
    ],
  },
  {
    project: 'Indiana Jones Masterpieces',
    company: 'Topps',
    year: 2008,
    preview: indyPreview,
    slug: 'indiana-jones-masterpieces',
    images: [
      { link: 'indiana-jones-masterpieces-scott-zirkel-01.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-02.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-03.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-04.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-05.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-06.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-07.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-08.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-09.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-10.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-11.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-12.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-13.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-14.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-15.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-16.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-17.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-18.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-19.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-20.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-21.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-22.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-23.jpg', width: 400, height: 561 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-24.jpg', width: 600, height: 740 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-25.jpg', width: 600, height: 740 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-28.jpg', width: 600, height: 740 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-29.jpg', width: 359, height: 754 },
      { link: 'indiana-jones-masterpieces-scott-zirkel-30.jpg', width: 359, height: 754 },
    ],
  },
]
