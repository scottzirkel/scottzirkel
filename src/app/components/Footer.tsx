import Weird from './Weird'
import { Behance, Deviantart, Dribbble, Facebook, Github, Instagram, Medium, Telegram, Twitter } from '@icons-pack/react-simple-icons'

const year = new Date().getFullYear()

export default function Footer() {
  return (
    <footer className="text-center font-sans">
      <section className="bg-gray-100 pb-8">
        <div className="max-w-2xl mx-auto space-y-6">
          <nav className="flex items-center justify-center mb-4 space-x-4 text-gray-800">
            <a href="https://t.me/scottzirkel" target="_blank" rel="noreferrer">
              <Telegram title="Contact me" className="hover:text-red-500" />
            </a>
            <a href="https://www.facebook.com/writerandartistscottzirkel" target="_blank" rel="noreferrer">
              <Facebook title="Facebook" className="hover:text-red-500" />
            </a>
            <a href="https://twitter.com/scottzirkel" target="_blank" rel="noreferrer">
              <Twitter title="Twitter" className="hover:text-red-500" />
            </a>
            <a href="https://www.instagram.com/scottzirkel/" target="_blank" rel="noreferrer">
              <Instagram title="Instagram" className="hover:text-red-500" />
            </a>
            <a href="https://dribbble.com/scottzirkel" target="_blank" rel="noreferrer">
              <Dribbble title="Dribbble" className="hover:text-red-500" />
            </a>
            <a href="https://github.com/scottzirkel/" target="_blank" rel="noreferrer">
              <Github title="Github" className="hover:text-red-500" />
            </a>
            <a href="https://medium.com/@scottzirkel/" target="_blank" rel="noreferrer">
              <Medium title="Medium" className="hover:text-red-500" />
            </a>
            <a href="https://behance.net/scottzirkel" target="_blank" rel="noreferrer">
              <Behance title="Old Behance Portfolio" className="hover:text-red-500" />
            </a>
            <a href="https://scottzirkel.deviantart.com/" target="_blank" rel="noreferrer">
              <Deviantart title="Old DeviantArt Portfolio" className="hover:text-red-500" />
            </a>
          </nav>
          <p className="text-sm font-small text-gray-800">Feel free to contact me through your favorite social media network.</p>
          <p className="text-sm font-small text-gray-800">Copyright © 1977—{year} Scott Zirkel. All Rights Reserved.</p>
        </div>
      </section>
      <Weird />
    </footer>
  )
}
