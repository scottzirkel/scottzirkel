import { Metadata } from 'next'

export const metadata: Metadata = {
	title: 'Scott Zirkel',
	description: 'Artist, author, developer, designer. Making stuff up since 1977',
}

export default function Home() {
	return (
		<>
			<p>
				Hey gang,{' '}
				<mark className="inline-block rotate-3 bg-red-500 px-1 text-gray-50">
					<span className="inline-block -rotate-3">I'm Scott</span>
				</mark>{' '}
				and this is my site (obviously). I'm an artist, a programmer, a writer, a designer, a father, a husband, a Jeeper, an
				overlander, and probably a dozen other things I've forgotten.
			</p>
			<p>
				I've got a few drawings, some writing, and other things{' '}
				<mark className="inline-block -rotate-1 bg-red-500 px-1 text-gray-50">
					<span className="inline-block rotate-1">scattered throughout the site</span>
				</mark>{' '}
				and across various social media platforms. I do hope you find something you enjoy.
			</p>
			<p>
				Your pal,
				<br />
				<span className="text-2xl text-gray-900">Scott</span>
			</p>
		</>
	)
}
