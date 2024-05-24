import {
	SiBehance as Behance,
	SiDeviantart as Deviantart,
	SiDribbble as Dribbble,
	SiFacebook as Facebook,
	SiGithub as Github,
	SiInstagram as Instagram,
	SiMedium as Medium,
	SiSubstack as Substack,
	SiTelegram as Telegram,
	SiX as X,
} from '@icons-pack/react-simple-icons'
import Weird from './Weird'

const year = new Date().getFullYear()

export default function Footer() {
	return (
		<footer className="text-center font-sans">
			<section className="bg-gray-100 pb-8">
				<div className="mx-auto max-w-2xl space-y-6">
					<nav className="mb-4 space-y-4 text-gray-800">
						<div className="flex items-center justify-center gap-4">
							<a href="https://t.me/scottzirkel" target="_blank" rel="me">
								<Telegram title="Contact me" className="hover:text-red-500" />
							</a>
							<a href="https://www.facebook.com/writerandartistscottzirkel" target="_blank" rel="me">
								<Facebook title="Facebook" className="hover:text-red-500" />
							</a>
							<a href="https://twitter.com/scottzirkel" target="_blank" rel="me">
								<X title="Twitter Forever" className="hover:text-red-500" />
							</a>
							<a href="https://www.instagram.com/scottzirkel/" target="_blank" rel="me">
								<Instagram title="Instagram" className="hover:text-red-500" />
							</a>
							<a href="https://dribbble.com/scottzirkel" target="_blank" rel="me">
								<Dribbble title="Dribbble" className="hover:text-red-500" />
							</a>
							<a href="https://github.com/scottzirkel/" target="_blank" rel="me">
								<Github title="Github" className="hover:text-red-500" />
							</a>
							<a href="https://scottzirkel.substack.com" target="_blank" rel="me">
								<Substack title="Substack Newsletter" className="hover:text-red-500" />
							</a>
						</div>
						<div>
							Archived but not forgotten
							<div className="flex items-center justify-center gap-4 opacity-50">
								<a href="https://medium.com/@scottzirkel/" target="_blank" rel="me">
									<Medium title="Medium" className="hover:text-red-500" />
								</a>
								<a href="https://behance.net/scottzirkel" target="_blank" rel="me">
									<Behance title="Behance Portfolio" className="hover:text-red-500" />
								</a>
								<a href="https://scottzirkel.deviantart.com/" target="_blank" rel="me">
									<Deviantart title="DeviantArt Portfolio" className="hover:text-red-500" />
								</a>
							</div>
						</div>
						<p className="font-small text-sm text-gray-800">
							Feel free to contact me through your favorite social media network.
						</p>
						<p className="font-small text-sm text-gray-800">Copyright © 1977—{year} Scott Zirkel. All Rights Reserved.</p>
					</nav>
				</div>
			</section>
			<Weird />
		</footer>
	)
}
