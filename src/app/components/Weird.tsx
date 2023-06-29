export default function Weird() {
	return (
		<section
			className="space-y-8 px-4 py-12 text-center font-weird text-gray-100 antialiased sm:space-y-2"
			title="WebRings! Admit it, you miss them too..."
		>
			<h3 className="text-xl">WEIRD WIDE WEB!</h3>
			<div className="flex flex-col items-center justify-center gap-4 text-sm sm:flex-row">
				<a href="https://weirdwidewebring.net/prev.html" className="block hover:text-red-500">
					Previous Weirdo
				</a>
				<span className="hidden sm:inline">~</span>
				<a href="https://weirdwidewebring.net/random.html" className="block hover:text-red-500">
					Random Weirdo
				</a>
				<span className="hidden sm:inline">~</span>
				<a href="https://weirdwidewebring.net/next.html" className="block hover:text-red-500">
					Next Weirdo
				</a>
			</div>
			<div className="flex flex-col items-center justify-center gap-4 text-xs sm:flex-row">
				<a href="https://weirdwidewebring.net" className="inline-block hover:text-red-500">
					All the Weirdos
				</a>
				<span className="hidden sm:inline">~</span>
				<a href="https://weirdwidewebring.net/join.html" className="inline-block hover:text-red-500">
					Get Weird
				</a>
			</div>
		</section>
	)
}
