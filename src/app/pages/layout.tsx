export default function Layout({ children }: { children: React.ReactNode }) {
	return (
		<article className="sp:px-6 space-y-6 px-4 py-10 text-xl leading-8 text-gray-800 sm:py-12 lg:px-8 lg:py-16">
			{children}
		</article>
	)
}
