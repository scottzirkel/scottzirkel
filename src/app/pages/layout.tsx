export default function Layout({ children }: { children: React.ReactNode }) {
  return (
    <article className="px-4 py-10 sp:px-6 sm:py-12 lg:px-8 lg:py-16 text-gray-800">
      {children}
    </article>
  )
}
