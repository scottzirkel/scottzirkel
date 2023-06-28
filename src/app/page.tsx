import PostHogClient from './posthog'

export default async function Home() {
	const flags = await getData()

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

async function getData() {
	const posthog = PostHogClient()
	const flags = await posthog.getAllFlags('scott@testing.com')
	return flags
}
