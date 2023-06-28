'use client'

import PageTitle from './components/PageTitle'

export default function NotFound() {
	if (process.browser) {
		document.body.classList.toggle('rotate-180')
	}

	return (
		<>
			<div className="rotate-180">
				<PageTitle>Page Not Found</PageTitle>
				<p>WHAT'D YOU DO?!</p>
				<p>Please, for the love of Pete, put it back!</p>
			</div>
		</>
	)
}
