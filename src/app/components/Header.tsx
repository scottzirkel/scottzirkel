'use client'
import Link from 'next/link'
import { useSelectedLayoutSegment } from 'next/navigation'

const mainNav = [
	{
		href: '/drawings',
		label: 'Drawings',
		rotate: 'hover:rotate-[-3deg]',
		activeClass: 'text-red-500',
	},
	{
		href: '/writing',
		label: 'Writing',
		rotate: 'hover:rotate-[2deg]',
		activeClass: 'text-red-500',
	},
	{
		href: '/design',
		label: 'Design',
		rotate: 'hover:rotate-[-4deg]',
		activeClass: 'text-red-500',
	},
	{
		href: '/code',
		label: 'Code',
		rotate: 'hover:rotate-[180deg]',
		activeClass: 'text-red-500',
	},
]

const secondaryNav = [
	{
		href: '/uses',
		label: 'Uses',
		hoverClass: '-mx-1',
	},
	{
		href: '/been-there-done-that',
		label: 'Been There Done That',
		hoverClass: 'mx-1',
	},
]

export default function Header() {
	const segment = useSelectedLayoutSegment() ?? 'home'

	return (
		<header className="space-y-4 bg-gray-50 pt-8 md:pt-16">
			<div className="mx-auto text-center leading-none">
				<h1 className="text-5xl font-bold uppercase text-red-500 lg:text-6xl">
					<Link href="/">Scott Zirkel</Link>
				</h1>
				<h2 className="font-subtitle text-2xl font-bold uppercase text-gray-800 lg:text-3xl">Making stuff up since 1977</h2>
			</div>
			<nav className="m-4 space-y-2 text-center leading-tight lg:mt-0">
				<div className="flex items-center justify-center space-x-4">
					{mainNav.map((navItem) => (
						<Link
							href={navItem.href}
							key={navItem.href}
							className={`${navItem.rotate} ${
								navItem.href.includes(segment) ? navItem.activeClass : 'text-gray-900'
							} font-subtitle text-2xl font-bold uppercase hover:text-red-500 md:text-3xl lg:text-4xl`}
						>
							{navItem.label}
						</Link>
					))}
				</div>
				<div className="flex items-center justify-center space-x-4">
					{secondaryNav.map((navItem) => (
						<Link
							href={navItem.href}
							key={navItem.href}
							className={`group relative block font-subtitle text-2xl font-bold text-red-500`}
						>
							<span className="relative z-10">{navItem.label}</span>
							<span
								className={`${navItem.hoverClass} ${
									navItem.href.includes(segment) ? 'bg-gray-600/25' : 'group-hover:bg-gray-600/25'
								} absolute  inset-0 z-0 my-4 h-4 w-full rounded`}
							></span>
						</Link>
					))}
				</div>
			</nav>
		</header>
	)
}
