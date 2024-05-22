import { Metadata } from 'next'
import styles from '../monitor.module.css'

export const metadata: Metadata = {
	title: 'Code by Scott Zirkel',
	description: '01001110011001010111001001100100',
}

export default function Page() {
	return (
		<>
			{/* For mobile, this should look like an old nokia or gameboy or something */}
			<div
				className={`${styles.monitor} relative mx-auto aspect-[4/3] w-full rounded-xl border-8 border-black bg-gradient-conic from-stone-600 to-stone-900 p-4 shadow-2xl blur-[0.25px]`}
				// className={`${styles.monitor} relative mx-auto border-8 border-black bg-gradient-conic shadow-2xl blur-[0.5px] from-gray-900 to-black p-4 rounded-xl w-[640px] h-[480px] xaspect-[4/3] overflow-hidden`}
			>
				<div className="absolute bottom-0 right-0 z-50 size-2 rounded-full border-2 border-[#b52300]">
					<div className="absolute size-2 rounded-full bg-[#ff0000] blur-[0.5px]"></div>
				</div>
				<div className="pointer-events-none absolute inset-4 rounded-3xl bg-white"></div>
				<div className="pointer-events-none absolute inset-x-0 bottom-0 h-1/6 w-full bg-gradient-to-t from-black"></div>
				<div className="pointer-events-none absolute inset-x-0 top-0 h-1/6 w-full bg-gradient-to-b from-black"></div>
				<div
					className={`${styles.scanlines} pointer-events-none absolute inset-0 z-[100] size-full mix-blend-overlay blur-[0.25px]`}
				></div>
				<div
					className={`relative size-full space-y-6 overflow-x-hidden overflow-y-scroll overscroll-contain rounded-3xl border-2 border-black bg-gradient-ellipse from-green-800 to-black p-4 pb-[50%] font-mono text-base text-green-300 mix-blend-multiply shadow-inner blur-[0.5px] selection:bg-green-300 selection:text-green-900 ${styles.screenScrollbars}`}
				>
					<h2 className="mt-2 font-mono text-4xl font-bold text-green-300">Code</h2>
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
						<li>
							<a
								href="https://filamentphp.com"
								target="_blank"
								rel="noreferrer"
								className="font-bold text-green-100 hover:text-white"
							>
								FilamentPHP
							</a>
						</li>
					</ul>
					<p>
						This site is built in{' '}
						<a href="https://nextjs.org" target="_blank" rel="noreferrer" className="font-bold text-green-100 hover:text-white">
							Next.js
						</a>
						, just because I wanted to learn something new.
					</p>
					<p>
						99% of my code is private client work, but I try to save some of my non-client work on GitHub. You can also see me
						trying new things at CodePen.
					</p>
					<h3 className="mb-4 font-mono text-2xl font-bold text-green-300">Articles</h3>
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
