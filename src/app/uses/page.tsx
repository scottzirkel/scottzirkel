import PageSubtitle from '../components/PageSubtitle'
import PageTitle from '../components/PageTitle'

export default function Page() {
	return (
		<>
			<PageTitle>Uses</PageTitle>
			<p>Here's a few of the tools I use. In case you care about such things.</p>
			<PageSubtitle>This Site</PageSubtitle>
			<p>This site was created with Next.js, Tailwind CSS, and a ton of pixels.</p>
			<PageSubtitle>Workspace</PageSubtitle>
			<ul className="space-y-4">
				<li>
					<p>
						<strong>Sit/Stand Desk</strong>
					</p>
					<p>
						I got a fancy desk to either sit or stand at. I sit at it. I rarely stand. I should, but I don't. It's a cheap one
						from Amazon.
					</p>
				</li>
				<li>
					<p>
						<strong>Fancy Ergonomic Mesh Chair</strong>
					</p>
					<p>
						I know a lot of folks have a really expensive mesh chair that does a lot of things, but I don't. Mine is a cheap one
						from Amazon and it is perfectly comfortable. I did add some rollerblade casters to it, game changer.
					</p>
				</li>
			</ul>
			<PageSubtitle>Hardware</PageSubtitle>
			<ul className="space-y-4">
				<li>
					<p>
						<strong>16" 2021 MacBook Pro M1 Max, 64GB of RAM</strong>
					</p>
					<p>I've been using a Mac for a few years now and the M1 Max is the best setup I've ever had.</p>
					<p>Especially after the 2019 MBP disaster.</p>
				</li>
				<li>
					<p>
						<strong>34" Curved UltraSharp Monitor</strong>
					</p>
					<p>
						I wasn't sure if I would like replacing my dual monitor setup for a single large one, much less a curved one. But
						honestly I love it. I do keep my laptop open off to the side for debugging.
					</p>
				</li>
				<li>
					<p>
						<strong>Keychron K2 Keyboard</strong>
					</p>
					<p>
						When my old Apple keyboard went out, I decided to take the plunge and get a clickity clacker. Using it increases my
						development by at least 4x.
					</p>
				</li>
				<li>
					<p>
						<strong>Logitech M100 Corded Mouse</strong>
					</p>
					<p>It is nothing fancy, but it is easy to replace went it goes out.</p>
				</li>
				<li>
					<p>
						<strong>11" iPad Pro with Apple Pencil</strong>
					</p>
					<p>The only way to draw. Except on paper, that's still pretty cool.</p>
				</li>
			</ul>
			<PageSubtitle>Productivity</PageSubtitle>
			<ul className="space-y-4">
				<li>
					<p>
						<a href="https://audiopen.ai/?aff=Z5K9v" target="_blank" rel="noreferrer" className="text-base font-bold text-red-500 hover:underline"><strong>AudioPen</strong></a>
					</p>
					<p>Audio Pen is one of the few AI tools I use, but it's been a real help.</p>
					<p>You just dictate into the app whatever thoughts you are having and it transcribes and summarizes what you wrote. I've found it is really helpful to hear your ideas in different words. It keeps your original transcripts as well.</p>
				</li>
			</ul>
			<PageSubtitle>Coding Software</PageSubtitle>
			<ul className="space-y-4">
				<li>
					<p>
						<strong>NeoVim</strong>
					</p>
					<p>
						I'm somewhat of a new convert to NeoVim. And by somewhat, I mean very. But once I got it setup properly, I jumped
						all in. I barely miss PHPStorm at all.
					</p>
				</li>
				<li>
					<p>
						<strong>Tmux</strong>
					</p>
					<p>Tmux is great, it keeps all of my windows open, even if the computer restarts.</p>
				</li>
				<li>
					<p>
						<strong>Kitty</strong>
					</p>
					<p>
						I was using Warp, and really liking it, but it didn't handle Tmux sessions well. Kitty is GPU driven, so it's fast,
						but pretty no-frills, which is great.
					</p>
				</li>
				<li>
					<p>
						<strong>Tinkerwell</strong>
					</p>
					<p>
						Tinkerwell is a great app for debugging PHP, specifically Laravel sites. It works locally and via SSH, very handy.
					</p>
				</li>
				<li>
					<p>
						<strong>Ray</strong>
					</p>
					<p>
						Ray is another debugging tool. It gives you the ability to output exceptions, dumps, and more. I usually leave it on
						the laptop monitor, off to the side, as it listens passively for anything it needs to tell me.
					</p>
				</li>
			</ul>
			<PageSubtitle>Design Software</PageSubtitle>
			<p>
				For over 20 years I used Adobe Software, but after moving to a primarily developer role, I decided to stop paying them
				each month. Worth it if you're getting paid to design, but if you're just doing it for fun, I didn't see the point.
			</p>
			<p>
				I found the line up from Affinity to be more than adequate for what I need. In fact, if you're a designer and can't
				afford the monthly Adobe fee, I highly recommend them.
			</p>
			<ul className="space-y-4">
				<li>
					<p>
						<strong>Affinity Photo</strong>
					</p>
					<p>As close to Photoshop as I've used in a great many years.</p>
				</li>
				<li>
					<p>
						<strong>Affinity Design</strong>
					</p>
					<p>
						Design is great, but a caveat if you're coming in from Illustrator or if you plan on collaborating with other
						designers: If you are importing AI files, only the artboard will import, nothing outside of it.
					</p>
				</li>
				<li>
					<p>
						<strong>Procreate</strong>
					</p>
					<p>Procreate is my go to iPad app for drawing.</p>
				</li>
			</ul>
			<PageSubtitle>Writing</PageSubtitle>
			<ul className="space-y-4">
				<li>
					<p>
						<strong>Scrivener</strong>
					</p>
					<p>
						I use Scrivener for prose, it's helpful for keeping track of word count targets, character arcs, and other stuff.
					</p>
					<p>I also write in markdown files in nvim too, just to keep the distractions at bay.</p>
				</li>
				<li>
					<p>
						<strong>Highland</strong>
					</p>
					<p>Highland is great for script writing, which is how I write my comics.</p>
				</li>
			</ul>
		</>
	)
}
