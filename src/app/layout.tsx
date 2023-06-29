import { AnalyticsWrapper } from './components/analytics'
import Footer from './components/Footer'
import Header from './components/Header'
import Logo from './components/Logo'
import { pressStart, ptMono, ptSans, ptSansCaption, ptSansNarrow } from './fonts'
import './globals.css'

export default function RootLayout({ children }: { children: React.ReactNode }) {
	return (
		<html
			lang="en"
			className={`${ptSans.variable} ${ptSansNarrow.variable} ${ptSansCaption.variable} ${pressStart.variable} ${ptMono.variable}`}
		>
			{/*
        <head /> will contain the components returned by the nearest parent
        head.tsx. Find out more at https://beta.nextjs.org/docs/api-reference/file-conventions/head
      */}
			<head />
			<body className="flex min-h-screen flex-col items-stretch justify-center border-t-8 border-red-500 bg-gray-900 font-sans leading-normal text-gray-600">
				<Header />
				<main className="h-full flex-1 bg-gray-50">
					<div className="mx-auto lg:max-w-3xl">
						<article className="sp:px-6 space-y-6 px-4 py-10 text-xl leading-8 text-gray-800 sm:py-12 lg:px-8 lg:py-16">
							{children}
						</article>
						<div className="absolute inset-0 hidden h-48 w-48 opacity-100 md:block">
							<Logo />
						</div>
					</div>
				</main>
				<Footer />
				<AnalyticsWrapper />
			</body>
		</html>
	)
}
