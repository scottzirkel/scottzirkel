'use client'
import Link from 'next/link'
import { useSelectedLayoutSegment, useSelectedLayoutSegments } from 'next/navigation'

const mainNav = [
  {
    href: '/drawings',
    label: 'Drawings',
    rotate: 'hover:rotate-[-3deg]',
    activeClass: 'text-red-500'
  },
  {
    href: '/writing',
    label: 'Writing',
    rotate: 'hover:rotate-[2deg]',
    activeClass: 'text-red-500'
  },
  {
    href: '/design',
    label: 'Design',
    rotate: 'hover:rotate-[-4deg]',
    activeClass: 'text-red-500'
  },
  {
    href: '/code',
    label: 'Code',
    rotate: 'hover:rotate-[180deg]',
    activeClass: 'text-red-500'
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
    hoverClass: 'mx-1'
  },
]

export default function Header() {
  const segment = useSelectedLayoutSegment() ?? 'home'

  return (
    <header className="bg-gray-50 pt-8 md:pt-16 space-y-4">
      <div className="leading-none mx-auto text-center">
        <h1 className="text-5xl lg:text-6xl uppercase font-bold text-red-500">
          <Link href="/">Scott Zirkel</Link>
        </h1>
        <h2 className="font-subtitle font-bold uppercase text-2xl lg:text-3xl text-gray-800">
          Making stuff up since 1977
        </h2>
      </div>
      <nav className="text-center leading-tight m-4 lg:mt-0 space-y-2">
        <div className="flex items-center justify-center space-x-4">
          {mainNav.map((navItem) => (
            <Link
              href={navItem.href}
              key={navItem.href}
              className={`${navItem.rotate} ${navItem.href.includes(segment) ? navItem.activeClass : 'text-gray-900'} font-bold transform hover:text-red-500 font-subtitle uppercase text-2xl md:text-3xl lg:text-4xl`}
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
              className={`relative block group font-bold font-subtitle text-red-500 text-2xl`}
            >
              <span className="relative z-10">{navItem.label}</span>
              <span
                className={`${navItem.hoverClass} ${navItem.href.includes(segment) ? 'bg-gray-600/25' : 'group-hover:bg-gray-600/25'} absolute  w-full h-4 my-4 inset-0 z-0 rounded`}
              ></span>
            </Link>
          ))}
        </div>
      </nav>
    </header>
  )
}
