import Image, { StaticImageData } from 'next/image'

type Book = {
	logo: string | StaticImageData | null
	title: string
	publisher: string
	year: number
	link: string | null
	description: string
	free: boolean
}

export default function Book({ logo = null, title, publisher, year, link = null, description, free = false }: Book) {
	return (
		<div className="rounded-lg bg-white p-4 shadow">
			<div className="mx-auto py-6 text-center sm:w-1/2">{logo && <Image src={logo} alt={title} />}</div>
			<p className="space-x-1 text-sm text-gray-800">
				<time dateTime={year.toString()}>{year}</time>
				<span>{publisher}</span>
			</p>
			<p className="text-lg font-bold text-gray-900">{title}</p>
			<p className="text-left">{description}</p>
			{link && (
				<p>
					<a href={link} target="_blank" rel="noreferrer" className="text-base font-bold text-red-500 hover:underline">
						{free ? 'Read for Free' : 'Buy Online'}
					</a>
				</p>
			)}
		</div>
	)
}
