import PageSubtitle from '../components/PageSubtitle'
import PageTitle from '../components/PageTitle'
import styles from '../monitor.module.css'

export default function Page() {
  return (
    <>
      <div
        className={`${styles.monitor} relative border-8 border-black bg-gradient-conic shadow-2xl blur-[0.5px] from-gray-900 to-black p-4 rounded-xl aspect-[4/3] overflow-hidden`}
      >
        <div className="absolute z-50 bottom-0 right-0 w-2 h-2 border-2 border-[#b52300] rounded-full">
          <div className="absolute blur-[0.5px] w-2 h-2 bg-[#ff0000] rounded-full"></div>
        </div>
        <div className="absolute bg-white inset-4 rounded-3xl pointer-events-none"></div>
        <div className="absolute w-full bottom-0 left-0 right-0 h-1/6 bg-gradient-to-t from-black pointer-events-none"></div>
        <div className="absolute inset-top w-full top-0 left-0 right-0 h-1/6 bg-gradient-to-b from-black pointer-events-none"></div>
        <div
          className={`${styles.scanlines} mix-blend-overlay blur-[0.75px] absolute w-full h-full inset-0 z-[100] pointer-events-none`}
        ></div>
        <div
          className={`relative py-8 shadow-inner z-[10] font-mono border-2 border-black space-y-6 blur-[0.5px] text-base mix-blend-multiply bg-gradient-ellipse from-green-900 to-black text-green-300 p-4 rounded-3xl h-full overflow-y-scroll overflow-x-hidden ${styles.screenScrollbars}`}
        >
          <PageTitle>Code</PageTitle>
          <p>I primarily use Laravel, a PHP framework. I'm currently enhancing that with the following hotness:</p>
          <ul>
            <li>
              <a
                href="https://inertiajs.com"
                target="_blank"
                rel="noreferrer"
                className="font-bold text-green-100 hover:text-white"
              >
                InertiaJS
              </a>
              /[
              <a
                href="https://vuejs.org"
                target="_blank"
                rel="noreferrer"
                className="font-bold text-green-100 hover:text-white"
              >
                Vue
              </a>
              ,{' '}
              <a
                href="https://reactjs.org"
                target="_blank"
                rel="noreferrer"
                className="font-bold text-green-100 hover:text-white"
              >
                React
              </a>
              ]
            </li>
            <li>
              <a
                href="https://laravel-livewire.com"
                target="_blank"
                rel="noreferrer"
                className="font-bold text-green-100 hover:text-white"
              >
                Livewire
              </a>
              /
              <a
                href="https://alpinejs.dev"
                target="_blank"
                rel="noreferrer"
                className="font-bold text-green-100 hover:text-white"
              >
                Alpine
              </a>
            </li>
            <li>
              <a
                href="https://tailwindcss.com"
                target="_blank"
                rel="noreferrer"
                className="font-bold text-green-100 hover:text-white"
              >
                Tailwind CSS
              </a>
            </li>
          </ul>
          <p>
            This site is built in{' '}
            <a href="https://nextjs.org" target="_blank" rel="noreferrer" className="font-bold text-green-100 hover:text-white">
              Next.js
            </a>
          </p>
          <p>
            99% of my code is private client work, but I try to save some of my non-client work on GitHub. You can also see me
            trying new things at CodePen.
          </p>
          <PageSubtitle>Articles</PageSubtitle>
          <h4>Kinda like a blog, but I never update it.</h4>
          <p>
            <a href="/articles/life-with-tailwind" className="font-bold block text-green-100 hover:text-white">
              Life with Tailwind [2020-11-17]
            </a>
            Tailwind CSS, it's just a way of life now. Spoiler: <em>I continue to still love it.</em>
          </p>
          <p>
            <a href="/articles/a-year-with-tailwind" className="font-bold block text-green-100 hover:text-white">
              A Year with Tailwind [2018-11-06]
            </a>
            My continuing adventures with Tailwind CSS. Spoiler: <em>I still love it.</em>
          </p>
          <p>
            <a href="/articles/a-week-with-tailwind" className="font-bold block text-green-100 hover:text-white">
              A Week with Tailwind [2017-11-07]
            </a>
            My first experience with Tailwind CSS, a utility-first CSS framework. Spoiler:
            <em>I love it.</em>
          </p>
        </div>
      </div>
    </>
  )
}
