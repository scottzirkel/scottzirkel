import Image, { StaticImageData } from 'next/image'

type Book = {
  logo: string | StaticImageData | null
  title: string
  publisher: string
  year: number
  link: string | null
  description: string
}

export default function Book({ logo = null, title, publisher, year, link = null, description }: Book) {
  return (
    <div className="bg-white shadow p-4">
      <div className="p-4 sm:w-1/3 mx-auto">{logo && <Image src={logo} alt={title} />}</div>
      <p className="text-sm text-gray-700 space-x-1">
        <time dateTime={year.toString()}>{year}</time>
        <span>{publisher}</span>
      </p>
      <p className="text-lg text-gray-900 font-bold">{title}</p>
      <p className="text-left">{description}</p>
      {link && (
        <p>
          <a href={link} target="_blank" rel="noreferrer" className="cursor-pointer hover:underline font-bold text-red-500 text-base">
            More Info
          </a>
        </p>
      )}
    </div>
  )
}
