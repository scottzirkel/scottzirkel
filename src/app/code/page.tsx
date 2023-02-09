import PageSubtitle from '../components/PageSubtitle'
import PageTitle from '../components/PageTitle'
import styles from '../monitor.module.css'

export default function Page() {
	return (
		<>
			<div
				className={`${styles.monitor} relative mx-auto h-[480px] w-[640px] rounded-xl border-8 border-black bg-gradient-conic from-stone-600 to-stone-900 p-4 shadow-2xl blur-[0.5px]`}
				// className={`${styles.monitor} relative mx-auto border-8 border-black bg-gradient-conic shadow-2xl blur-[0.5px] from-gray-900 to-black p-4 rounded-xl w-[640px] h-[480px] xaspect-[4/3] overflow-hidden`}
			>
				<div className="absolute bottom-0 right-0 z-50 h-2 w-2 rounded-full border-2 border-[#b52300]">
					<div className="absolute h-2 w-2 rounded-full bg-[#ff0000] blur-[0.5px]"></div>
				</div>
				<div className="pointer-events-none absolute inset-4 rounded-3xl bg-white"></div>
				<div className="pointer-events-none absolute inset-x-0 bottom-0 h-1/6 w-full bg-gradient-to-t from-black"></div>
				<div className="pointer-events-none absolute inset-x-0 top-0 h-1/6 w-full bg-gradient-to-b from-black"></div>
				<div
					className={`${styles.scanlines} pointer-events-none absolute inset-0 z-[100] h-full w-full mix-blend-overlay blur-[0.05px]`}
				></div>
				<div
					className={`relative h-full w-full space-y-6 overflow-x-hidden overflow-y-scroll rounded-3xl border-2 border-black bg-gradient-ellipse from-green-900 to-black p-4 pb-8 font-mono text-base text-green-300 mix-blend-multiply shadow-inner blur-[0.5px] ${styles.screenScrollbars}`}
				>
					<PageTitle>Code</PageTitle>
					<p>I primarily use Laravel, a PHP framework. I'm currently enhancing that with the following hotness:</p>
					<ul>
						<li>
							<a
								href="https://inertiajs.com"
								target="_blank"
								rel="noreferrer"
								className="font-bold text-green-100 hover:text-white"
							>
								InertiaJS
							</a>
							/[
							<a
								href="https://vuejs.org"
								target="_blank"
								rel="noreferrer"
								className="font-bold text-green-100 hover:text-white"
							>
								Vue
							</a>
							,{' '}
							<a
								href="https://reactjs.org"
								target="_blank"
								rel="noreferrer"
								className="font-bold text-green-100 hover:text-white"
							>
								React
							</a>
							]
						</li>
						<li>
							<a
								href="https://laravel-livewire.com"
								target="_blank"
								rel="noreferrer"
								className="font-bold text-green-100 hover:text-white"
							>
								Livewire
							</a>
							/
							<a
								href="https://alpinejs.dev"
								target="_blank"
								rel="noreferrer"
								className="font-bold text-green-100 hover:text-white"
							>
								Alpine
							</a>
						</li>
						<li>
							<a
								href="https://tailwindcss.com"
								target="_blank"
								rel="noreferrer"
								className="font-bold text-green-100 hover:text-white"
							>
								Tailwind CSS
							</a>
						</li>
					</ul>
					<p>
						This site is built in{' '}
						<a href="https://nextjs.org" target="_blank" rel="noreferrer" className="font-bold text-green-100 hover:text-white">
							Next.js
						</a>
					</p>
					<p>
						99% of my code is private client work, but I try to save some of my non-client work on GitHub. You can also see me
						trying new things at CodePen.
					</p>
					<PageSubtitle>Articles</PageSubtitle>
					<h4>Kinda like a blog, but I never update it.</h4>
					<p>
						<a href="/articles/life-with-tailwind" className="block font-bold text-green-100 hover:text-white">
							Life with Tailwind [2020-11-17]
						</a>
						Tailwind CSS, it's just a way of life now. Spoiler: <em>I continue to still love it.</em>
					</p>
					<p>
						<a href="/articles/a-year-with-tailwind" className="block font-bold text-green-100 hover:text-white">
							A Year with Tailwind [2018-11-06]
						</a>
						My continuing adventures with Tailwind CSS. Spoiler: <em>I still love it.</em>
					</p>
					<p>
						<a href="/articles/a-week-with-tailwind" className="block font-bold text-green-100 hover:text-white">
							A Week with Tailwind [2017-11-07]
						</a>
						My first experience with Tailwind CSS, a utility-first CSS framework. Spoiler:
						<em>I love it.</em>
					</p>
				</div>
			</div>
		</>
	)
}
