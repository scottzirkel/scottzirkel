import { Metadata } from 'next'

export const metadata: Metadata = {
	title: 'Scott Zirkel',
	description: 'Artist, author, developer, designer. Making stuff up since 1977',
}

export default function Home() {
	return (
		<>
			<p>
				Hey gang, I'm Scott and this is my site (obviously). I'm an artist, a programmer, a writer, a designer, a father, a
				husband, a Jeeper, an overlander, and probably a dozen other things I've forgotten.
			</p>
			<p>
				I've got a few drawings, some writing, and other things scattered throughout the site and across various social media
				platforms. I do hope you find something you enjoy.
			</p>
			<p>Your pal, Scott</p>
		</>
	)
}
