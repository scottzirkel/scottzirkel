import { shots } from 'lib/dribbble'
import Image from 'next/image'

export default function Dribbble() {
	const randomShots = shots.sort(() => 0.5 - Math.random()).slice(0, 3)

	return (
		<div className="grid grid-cols-3 gap-4">
			{randomShots.map((shot) => (
				<a key={shot.id} href={shot.link} target="_blank" rel="noreferrer" className="block shadow hover:shadow-md">
					<figure className="overflow-hidden rounded bg-white">
						<Image src={shot.thumbnail} alt={shot.title} width={shot.width} height={shot.height} />
						<figcaption className="p-2 text-center text-sm">{shot.title}</figcaption>
					</figure>
				</a>
			))}
		</div>
	)
}
