export type Article = {
	slug: string
  title: string
  author: string
  date: number | string
  category?: string
  originalPost?: {
		site: string,
		link: string
	}
  tags?: Array<string>
	blurb?: string
}
