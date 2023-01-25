import Header from './components/Header'
import './globals.css'
// import localFont from '@next/font/local'
import {
  ptMono,
  ptSans,
  ptSansNarrow,
  ptSansCaption,
  vaultAlarm,
  pressStart,
} from './fonts'
import Footer from './components/Footer'
import Logo from './components/Logo'

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html
      lang="en"
      className={`${ptSans.variable} ${ptSansNarrow.variable} ${ptSansCaption.variable} ${vaultAlarm.variable} ${pressStart.variable} ${ptMono.variable}`}
    >
      {/*
        <head /> will contain the components returned by the nearest parent
        head.tsx. Find out more at https://beta.nextjs.org/docs/api-reference/file-conventions/head
      */}
      <head />
      <body className="min-h-screen bg-gray-900 border-t-8 border-red-500 flex flex-col items-stretch justify-center font-sans leading-normal text-gray-600">
        <Header />
        <main className="bg-gray-50 flex-1 h-full">
          <div className="lg:max-w-3xl mx-auto">
            <article className="px-4 py-10 sp:px-6 sm:py-12 lg:px-8 lg:py-16 text-gray-800 text-xl leading-8 space-y-6">
              {children}
            </article>
            <div className="absolute inset-0 w-48 h-48 hidden md:block opacity-100">
              <Logo />
            </div>
          </div>
        </main>
        <Footer />
      </body>
    </html>
  )
}
