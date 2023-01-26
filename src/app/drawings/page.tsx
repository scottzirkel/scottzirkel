import Book from '../components/Book'
import PageSubtitle from '../components/PageSubtitle'
import PageTitle from '../components/PageTitle'
import fairerCover from '../../../public/fairer-cover.webp'
import sketchbookCover from '../../../public/2009-sketchbook-cover.jpg'
import fireflyPreview from '../../../public/firefly-preview.jpg'
import antmanPreview from '../../../public/antman-preview.jpg'
import ultronPreview from '../../../public/ultron-preview.jpg'
import legendaryPreview from '../../../public/legendary-preview.jpg'
import esbPreview from '../../../public/esb-preview.jpg'
import fairylandPreview from '../../../public/fairyland-preview.jpg'
import mandyPreview from '../../../public/mandy-preview.jpg'
import galaxyPreview from '../../../public/galaxy4-preview.jpg'
import indyPreview from '../../../public/indy-preview.jpg'
import zombiePreview from '../../../public/zombie-preview.jpg'
import deadPreview from '../../../public/dead-at-17-preview.webp'
import warlordPreview from '../../../public/warlord-preview.jpg'
import hackPreview from '../../../public/hack-slash-preview.jpg'
import Image from 'next/image'

const sketchbooks = [
  {
    logo: fairerCover,
    title: 'Fairer',
    year: 2011,
    description: '22 pages of sketches of the fairer sex.',
    link: 'https://gumroad.com/l/fairer',
    publisher: 'Self-Published',
  },
  {
    logo: sketchbookCover,
    title: '2009 Sketchbook',
    year: 2009,
    description: 'A collection of sketches from 2008-2009.',
    link: 'https://scottzirkel.gumroad.com/l/eqlX',
    publisher: 'Self-Published',
  },
]

const sketchcards = [
  {
    project: "Totally Radical 80's",
    company: 'Artists Unite',
  },
  {
    project: 'Firefly: The Verse',
    company: 'Upper Deck',
    preview: fireflyPreview,
    year: 2015,
  },
  {
    project: 'Marvel Ant-Man',
    company: 'Upper Deck',
    preview: antmanPreview,
    year: 2015,
  },
  {
    project: 'Marvel Avengers: Age of Ultron',
    company: 'Upper Deck',
    preview: ultronPreview,
    year: 2015,
  },
  {
    project: 'Marvel Legendary/3D',
    company: 'Upper Deck',
    preview: legendaryPreview,
    year: '2014/2015',
  },
  {
    project: 'Hack/Slash',
    company: '5finity',
    year: 2012,
    preview: hackPreview,
  },
  {
    project: "P'Ups",
    company: '5finity',
  },
  {
    project: 'Warlord of Mars',
    company: 'Bregent/Dynamite',
    year: 2012,
    preview: warlordPreview,
  },
  {
    project: 'Empire Strikes Back 3D',
    company: 'Topps',
    year: 2010,
    preview: esbPreview,
  },
  {
    project: 'Dead@17',
    company: '5finity',
    preview: deadPreview,
  },
  {
    project: 'The Essence of Fairyland',
    company: 'sadlittles.com',
    preview: fairylandPreview,
  },
  {
    project: 'Zombies vs Cheerleaders',
    company: '5finity',
    preview: zombiePreview,
  },
  {
    project: "Dean Yeagle's Mandy",
    company: '5finity',
    year: 2009,
    preview: mandyPreview,
  },
  {
    project: 'Star Wars Galaxy IV',
    company: 'Topps',
    year: 2008,
    preview: galaxyPreview,
  },
  {
    project: 'Indiana Jones Masterpieces',
    company: 'Topps',
    year: 2008,
    preview: indyPreview,
  },
]

const pinups = [
  {
    title: 'Dead@17',
    publisher: 'Image Comics',
  },
  {
    title: "L'il Red Stitch",
    publisher: 'Penny Farthing Press',
  },
  {
    title: 'Decoy',
    publisher: 'Penny Farthing Press',
  },
]

export default function Page() {
  return (
    <>
      <PageTitle>Drawings</PageTitle>
      <PageSubtitle>Sketchbook Collections</PageSubtitle>
      <div className="flex items-center justify-between gap-4">
        {sketchbooks.map((book) => (
          <div key={book.title} className="w-1/2">
            <Book logo={book.logo} title={book.title} publisher={book.publisher} year={book.year} description={book.description} link={book.link} />
          </div>
        ))}
      </div>
      <PageSubtitle>Sketchcard Projects</PageSubtitle>
      <div className="grid grid-cols-3 gap-4">
        {sketchcards.map((card) => (
          <figure key={card.project} className="col-span-1 bg-white rounded-lg shadow hover:shadow-md overflow-hidden flex flex-col items-center justify-center">
            {card.preview ? <Image src={card.preview} alt="Firefly sketchcards" className="aspect-[8/11] object-cover" /> : <div className="aspect-[8/11] w-full bg-gray-600 flex flex-col items-center justify-center text-6xl font-bold">?</div>}
            <figcaption className="p-2 text-center flex flex-col items-center justify-center flex-1">
              <p className="font-bold text-lg">{card.project}</p>
              <p className="text-base">
                {card.year} {card.company}
              </p>
            </figcaption>
          </figure>
        ))}
      </div>
      <PageSubtitle>Pinups</PageSubtitle>
      {pinups.map((pinup) => (
        <div key={pinup.title}>
          <p>{pinup.title}</p>
          <p>{pinup.publisher}</p>
        </div>
      ))}
    </>
  )
}
