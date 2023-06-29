import Dribbble from '../components/Dribbble'
import PageSubtitle from '../components/PageSubtitle'
import PageTitle from '../components/PageTitle'
import { Metadata } from 'next'

export const metadata: Metadata = {
	title: 'Designs by Scott Zirkel',
	description: 'Logos, sites, and more.'
}

export default async function Page() {
	return (
		<>
			<PageTitle>Design</PageTitle>
			<p>
				I studied design in college and started working as a designer after graduation. I worked on a multitude of projects for
				clients of all sizes. After more than 20 years, I realized I didn't enjoy it as much as I used to. I accomplished a lot,
				including being able to do package design for a Star Wars licensed product.
			</p>
			<p>
				Fortunately while in college, one of my professors introduced me to HTML, enforcing the importance of learning to hand
				code, and not rely on tools to build for you – which at the time was FrontPage.
			</p>
			<p>
				I found quickly that I enjoyed writing code, and was one of few designers that could also code. Not only did I know HTML
				& CSS, but soon picked up PHP and JavaScript as well as SQL, database and server management. I'm fortunate to be able to
				choose between careers, and was able to pivot to development only quite easily.
			</p>
			<p>I still enjoy designing for myself, but for the most part, I'm done with client work.</p>
			<PageSubtitle>Dribbble</PageSubtitle>
			<Dribbble />
			<p>
				I do try to keep my dribbble account active with personal projects, so{' '}
				<a href="https://dribbble.com/scottzirkel" target="_blank" rel="noreferrer">
					follow me
				</a>{' '}
				there, if you want the latest and greatest.
			</p>
			<PageSubtitle>Professional Design</PageSubtitle>
			<p>
				For 10 years I worked as designer, then Creative Director of Alara Creative, a bespoke marketing firm. I was able to
				work with a variety of clients on a myriad of projects.
			</p>
			<p>Here are a few of my favorite from over the years:</p>
			<p>
				(Drop in logos, package design, web design, etc, BEFORE launch. Otherwise people will see this and think you're a
				poser.)
			</p>
		</>
	)
}
