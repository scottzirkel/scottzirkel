'use client'
import Image from 'next/image'
import { useRouter } from 'next/navigation'
import { sketchcards } from '../../../lib/sketchcards'
import sketchbookCover from '../../../public/2009-sketchbook-cover.jpg'
import fairerCover from '../../../public/fairer-cover.webp'
import Book from '../components/Book'
import PageSubtitle from '../components/PageSubtitle'
import PageTitle from '../components/PageTitle'

const sketchbooks = [
	{
		logo: fairerCover,
		title: 'Fairer',
		year: 2011,
		description: '22 pages of sketches of the fairer sex.',
		link: 'https://gumroad.com/l/fairer',
		publisher: 'Self-Published',
		free: true,
	},
	{
		logo: sketchbookCover,
		title: '2009 Sketchbook',
		year: 2009,
		description: 'A collection of sketches from 2008-2009.',
		link: 'https://scottzirkel.gumroad.com/l/eqlX',
		publisher: 'Self-Published',
		free: true,
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
							free={book.free}
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
			<div className="grid grid-cols-1 gap-4 sm:grid-cols-3">
				{sketchcards.map((card) => (
					<figure
						key={card.slug}
						onClick={() => router.push(`/drawings/${card.slug}`)}
						className="col-span-1 flex cursor-pointer flex-col items-center justify-between overflow-hidden rounded-lg bg-white shadow hover:shadow-md"
					>
						{card.preview ? (
							<Image src={card.preview} alt="Firefly sketchcards" className="aspect-[8/11] object-cover" />
						) : (
							<div className="flex aspect-[8/11] w-full flex-col items-center justify-center bg-gray-600 text-6xl font-bold">
								?
							</div>
						)}
						<figcaption className="flex flex-1 flex-col items-center justify-center p-2 text-center">
							<p className="text-lg font-bold">{card.project}</p>
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
