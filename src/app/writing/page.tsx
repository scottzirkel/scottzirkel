import loreInvestigations from '../../../public/lore-investigations.webp'
import heGuy from '../../../public/he-guy.png'
import haywire from '../../../public/a-bit-haywire.png'
import wonderdog from '../../../public/wonderdog-inc.png'
import Book from '../components/Book'
import PageTitle from '../components/PageTitle'
import PageSubtitle from '../components/PageSubtitle'

const selfPublishedBooks = [
  {
    title: 'He-Guy and the Guys of the Universe',
    publisher: 'Self-published',
    year: 2010,
    logo: heGuy,
    description: 'Join He-Guy and his friends Guy-At-Arms, She-La & the rest of the Guys of the Universe as they defend Castle Guyskull from the evil forces of Skull-Guy!',
    link: 'https://guysoftheuniverse.com',
  },
  {
    title: 'Lore Investigations',
    publisher: 'Self-published',
    year: 2009,
    logo: loreInvestigations,
    description: "Lore Investigations follows the paranormal investigative team of Nathan and TJ. Their first case is The Creepy Barn, in which they go up against what is possibly a possessed teenaged girl. Of course, it's hard to tell a regular teenaged girl from one possessed by a ghost.",
    link: 'https://loreinvestigations.com',
  },
]

const publishedBooks = [
  {
    title: 'Wonderdog, Inc',
    publisher: 'Arcana Comics',
    year: 2010,
    logo: wonderdog,
    description: "Ryan Robertson's summer plans are put on hold when he discovers he'll be staying at his grandfather's farm while his parents travel to Europe. Just as he grows accustomed to life without Internet, he and his grandfather are traveling to Brazil in search of the Fountain of Youth. On the way he learns the truth about his family, friends and the secrets of Wonderdog, Inc.",
    link: 'https://wonderdoginc.com',
  },
  {
    title: 'A Bit Haywire',
    publisher: 'Viper Comics',
    year: 2006,
    logo: haywire,
    description: "Owen Bryce is a normal good-natured 10 year-old boy who likes robots and thinks all girls have cooties. One day, however, Owen will soon find out just how abnormal he really is. He'll find out when everything goes a bit haywire.",
    link: 'https://abithaywire.com',
  },
]

const anthologies = [
  {
    title: 'Josh Howard Presents Sasquatch',
    publisher: 'Viper Comics',
    year: 2007,
    description: 'Contributed a short story "The Sitter"',
    link: 'https://www.amazon.com/Josh-Howard-Presents-Sasquatch/dp/0977788385',
  },
  {
    title: 'Decoy: Menagerie Vol 1',
    publisher: 'Penny Farthing Press',
    year: 2005,
    description: 'Contributed a short story "Big Top Decoy"',
    link: 'https://www.amazon.com/Decoy-Menagerie-Part-Courtney-Huddleston/dp/0971901236/ref=sr_1_1?crid=B4TL3M66YSQE&keywords=decoy+menagerie&qid=1674536863&s=books&sprefix=decoy+menageri%2Cstripbooks%2C237&sr=1-1',
  },
]

export default function Page() {
  return (
    <>
      <PageTitle>Writing</PageTitle>
      <PageSubtitle>Self-Published Comics</PageSubtitle>
      <div className="space-y-4">
        {selfPublishedBooks.map((book) => (
          <Book key={book.title} logo={book.logo} title={book.title} publisher={book.publisher} year={book.year} description={book.description} link={book.link} />
        ))}
      </div>
      <PageSubtitle>Published Comics</PageSubtitle>
      <div className="space-y-4">
        {publishedBooks.map((book) => (
          <Book key={book.title} logo={book.logo} title={book.title} publisher={book.publisher} year={book.year} description={book.description} link={book.link} />
        ))}
      </div>
      <PageSubtitle>Anthology Comics</PageSubtitle>
      <div className="space-y-4">
        {anthologies.map((book) => (
          <Book key={book.title} title={book.title} publisher={book.publisher} year={book.year} description={book.description} link={book.link} logo={null} />
        ))}
      </div>
    </>
  )
}
