import PageTitle from '@/app/components/PageTitle'
import matter from 'gray-matter'
import fs from 'fs'
import { ReactMarkdown } from 'react-markdown/lib/react-markdown'
import styles from './styles.module.css'
import 'highlight.js/styles/default.css'
import { notFound } from 'next/navigation'

// async function getData() {
//   console.log(__dirname)
//   const files = fs.readdirSync('./lib/articles')
//   const articles = files.map((fileName) => {
//     const slug = fileName.replace('.md', '')
//     const readFile = fs.readFileSync(`./lib/articles/${fileName}`, 'utf-8')
//     const { data: frontmatter } = matter(readFile)

//     return {
//       slug,
//       ...frontmatter,
//     }
//   })

//   return {
//     props: {
//       articles,
//     },
//   }
// }

async function getArticle({ slug }: any) {
  if (typeof slug === 'undefined') {
    notFound()
  }

  const path = `./lib/articles/${slug}.md`

  if (!fs.existsSync(path)) {
    notFound()
  }
  const fileName = fs.readFileSync(path, 'utf-8')
  const { data: frontmatter, content } = matter(fileName)
  return {
    props: {
      frontmatter,
      content,
    },
  }
}

export default async function Page({ params }: any) {
  const { props } = await getArticle(params)
  const { title, originalPost, date } = props.frontmatter
  const content = props.content

  return (
    <>
      <div>
      <PageTitle>{title}</PageTitle>
        <p className="text-lg italic">Originally posted on {date}
        { typeof originalPost !== 'undefined' && (
          <>
            {' '}at <a href={originalPost.link} target="_blank" rel="noreferrer" className="text-red-500 hover:text-red-700">{originalPost.site}</a>
          </>
        )}
        </p>
      </div>
      <ReactMarkdown className={styles.article}>{content}</ReactMarkdown>
    </>
  )
}
