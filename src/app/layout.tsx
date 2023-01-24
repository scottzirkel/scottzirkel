import Header from './components/Header'
import './globals.css'
// import localFont from '@next/font/local'
import { ptSans, ptSansNarrow, ptSansCaption, vaultAlarm } from './fonts'
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
      className={`${ptSans.variable} ${ptSansNarrow.variable} ${ptSansCaption.variable} ${vaultAlarm.variable}`}
    >
      {/*
        <head /> will contain the components returned by the nearest parent
        head.tsx. Find out more at https://beta.nextjs.org/docs/api-reference/file-conventions/head
      */}
      <head />
      <body className="min-h-screen bg-gray-900 border-t-8 border-red-500 flex flex-col items-stretch justify-center font-sans leading-normal text-gray-600">
        <Header />
        <main className="bg-gray-50 flex-1 h-full">
          <article className="lg:max-w-3xl mx-auto">
            {children}
            <div className="absolute inset-0 w-48 h-48 hidden md:block opacity-100">
              <Logo />
            </div>
          </article>
        </main>
        <Footer />
      </body>
    </html>
  )
}
