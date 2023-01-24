import Weird from './Weird'
import localFont from '@next/font/local'

const year = new Date().getFullYear()

export default function Footer() {
  return (
    <footer className="text-center font-sans">
      <section className="bg-gray-100 pb-8">
        <div className="max-w-2xl mx-auto space-y-6">
          <nav className="flex items-center justify-center mb-4 space-x-4">
            socials
          </nav>
          <p className="text-sm font-small text-gray-800">
            To contact me, please send me a Tweet, a message through Telegram,
            or contact me through any of the aforementioned social networks.
          </p>
          <p className="text-sm font-small text-gray-800">
            Copyright © 1977—{year} Scott Zirkel. All Rights Reserved.
          </p>
        </div>
      </section>
      <Weird />
    </footer>
  )
}
