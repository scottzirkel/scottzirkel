import PageSubtitle from '../components/PageSubtitle'
import PageTitle from '../components/PageTitle'

export default function Page() {
  return (
    <>
      <PageTitle>Design</PageTitle>
      <PageSubtitle>Dribbble</PageSubtitle>
      <p>
        While I'm not designing as much these days, I do try to keep my dribbble
        account active, so{' '}
        <a href="https://dribbble.com/scottzirkel" target="_blank">
          follow me
        </a>{' '}
        there, if you want the latest and greatest.
      </p>
      <PageSubtitle>Personal Design</PageSubtitle>
      <p>
        I love coming up with brands and creating logos. Sometimes I use them
        for things, other times they are just to scratch an itch.
      </p>
      <PageSubtitle>Professional Design</PageSubtitle>
      <p>
        For 10 years I worked as designer, then Creative Director of Alara
        Creative, a bespoke marketing firm. I was able to work with a variety of
        clients on a myriad of projects.
      </p>
      <p>Here are a few of my favorite from over the years:</p>
      <p>
        (Drop in logos, package design, web design, etc, BEFORE launch.
        Otherwise people will see this and think you're a poser.)
      </p>
    </>
  )
}
