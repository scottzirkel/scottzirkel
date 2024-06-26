import { SpeedInsights } from '@vercel/speed-insights/next'
import Footer from './components/Footer'
import Header from './components/Header'
import Logo from './components/Logo'
import { AnalyticsWrapper } from './components/analytics'
import { freeLunch, pressStart, ptMono, ptSans, ptSansCaption, ptSansNarrow, wilcoLoftSans } from './fonts'
import './globals.css'

export default function RootLayout({ children }: { children: React.ReactNode }) {
	return (
		<html
			lang="en"
			className={`${wilcoLoftSans.variable} ${freeLunch.variable} ${ptSans.variable} ${ptSansNarrow.variable} ${ptSansCaption.variable} ${pressStart.variable} ${ptMono.variable}`}
		>
			{/*
        <head /> will contain the components returned by the nearest parent
        head.tsx. Find out more at https://beta.nextjs.org/docs/api-reference/file-conventions/head
      */}
			<head />
			<body className="flex min-h-screen flex-col items-stretch justify-center border-t-8 border-red-500 bg-gray-900 font-sans leading-normal text-gray-900">
				<Header />
				<main className="h-full flex-1 bg-gray-50">
					<div className="mx-auto lg:max-w-5xl">
						<article className="sp:px-6 space-y-8 px-4 py-10 text-xl text-gray-800 sm:py-12 lg:px-8 lg:py-16">
							{children}
						</article>
						<div className="absolute inset-0 hidden size-48 opacity-100 md:block">
							<Logo />
						</div>
					</div>
				</main>
				<Footer />
				<AnalyticsWrapper />
				<SpeedInsights />
			</body>
		</html>
	)
}
