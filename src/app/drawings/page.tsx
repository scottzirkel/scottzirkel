'use client'
import Book from '../components/Book'
import PageSubtitle from '../components/PageSubtitle'
import PageTitle from '../components/PageTitle'
import fairerCover from '../../../public/fairer-cover.webp'
import sketchbookCover from '../../../public/2009-sketchbook-cover.jpg'
import Image, { StaticImageData } from 'next/image'
import { sketchcards } from '../../../lib/sketchcards'
import Link from 'next/link'
import { useRouter } from 'next/navigation'

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
  const router = useRouter()
  return (
    <>
      <PageTitle>Drawings</PageTitle>
      <PageSubtitle>Sketchbook Collections</PageSubtitle>
      <div className="flex items-center justify-between gap-4">
        {sketchbooks.map((book) => (
          <div key={book.title} className="w-1/2">
            <Book
              logo={book.logo}
              title={book.title}
              publisher={book.publisher}
              year={book.year}
              description={book.description}
              link={book.link}
            />
          </div>
        ))}
      </div>
      <PageSubtitle>Sketchcard Projects</PageSubtitle>
      <div className="grid grid-cols-1 sm:grid-cols-3 gap-4">
        {sketchcards.map((card) => (
          <figure
            key={card.slug}
            onClick={() => router.push(`/drawings/${card.slug}`)}
            className="flex flex-col items-center justify-between col-span-1 bg-white rounded-lg shadow hover:shadow-md overflow-hidden cursor-pointer"
          >
            {card.preview ? (
              <Image src={card.preview} alt="Firefly sketchcards" className="aspect-[8/11] object-cover" />
            ) : (
              <div className="aspect-[8/11] w-full bg-gray-600 flex flex-col items-center justify-center text-6xl font-bold">
                ?
              </div>
            )}
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
