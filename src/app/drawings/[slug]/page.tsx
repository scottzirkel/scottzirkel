import PageSubtitle from '@/app/components/PageSubtitle'
import PageTitle from '@/app/components/PageTitle'
import { Sketchcard, sketchcards } from 'lib/sketchcards'
import Image from 'next/image'

export default function Page({ params }: any) {
  const card: Sketchcard = sketchcards.filter((card) => card.slug === params.slug)[0]

  const containerClass = card.style === 'single-column' ? 'grid grid-cols-1 gap-4' : 'grid grid-cols-1 sm:grid-cols-2 gap-4'

  return (
    <>
      <div className="leading-0">
        <PageTitle>{card.project}</PageTitle>
        <PageSubtitle>
          {card.company} {card.year}
        </PageSubtitle>
      </div>
      <div className={containerClass}>
        {card.images &&
          card.images.map((image) => (
            <Image
              key={image.link}
              src={`/drawings/sketchcards/${card.slug}/${image.link}`}
              width={image.width}
              height={image.height}
              alt={`${card.project} sketchcard`}
              className="col-span-1 max-w-full"
            />
          ))}
      </div>
    </>
  )
}
