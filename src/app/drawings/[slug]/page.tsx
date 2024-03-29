import PageSubtitle from '@/app/components/PageSubtitle'
import PageTitle from '@/app/components/PageTitle'
import type { Sketchcard, Sketchcards } from 'lib/sketchcards'
import { sketchcards } from 'lib/sketchcards'
import Image from 'next/image'
import { notFound } from 'next/navigation'

type Props = {
	params: { slug: string }
	searchParams: { [key: string]: string | string[] | undefined }
}

export async function generateMetadata({ params }: Props) {
	const card: Sketchcard = sketchcards.filter((card) => card.slug === params.slug)[0]
	if (typeof card === 'undefined') {
		notFound()
	}

	return {
		title: card.project,
		description: `Sketchcard project from ${card.year}`,
	}
}

export default function Page({ params }: Props) {
	const card: Sketchcard = sketchcards.filter((card) => card.slug === params.slug)[0]
	if (typeof card === 'undefined') {
		notFound()
	}
	const style = card.style ?? null

	const containerClass = style === 'single-column' ? 'grid grid-cols-1 gap-4' : 'grid grid-cols-1 sm:grid-cols-2 gap-4'

	return (
		<>
			<div>
				<PageTitle>{card.project}</PageTitle>
				<PageSubtitle>
					{card.company} {card.year}
				</PageSubtitle>
			</div>
			<div className={containerClass}>
				{card.images ? (
					card.images.map((image) => (
						<Image
							key={image.link}
							src={`/drawings/sketchcards/${card.slug}/${image.link}`}
							width={image.width}
							height={image.height}
							alt={`${card.project} sketchcard`}
							className="col-span-1 max-w-full"
						/>
					))
				) : (
					<p>Sorry, these cards are either currently in progress or I lost the scans.</p>
				)}
			</div>
		</>
	)
}

export async function generateStaticParams() {
	const drawings: Sketchcards = sketchcards
	return drawings
		.filter((drawings) => typeof drawings !== 'undefined')
		.map((drawing) => ({
			slug: drawing.slug,
		}))
}
