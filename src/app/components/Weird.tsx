export default function Weird() {
  return (
    <section
      className="text-gray-100 antialiased py-12 text-center font-weird space-y-2"
      title="WebRings! Admit it, you miss them too..."
    >
      <h3 className="text-xl">WEIRD WIDE WEB!</h3>
      <div className="flex items-center justify-center gap-4 text-sm">
        <a
          href="https://weirdwidewebring.net/prev.html"
          className="block hover:text-red-500"
        >
          Previous Weirdo
        </a>
        ~
        <a
          href="https://weirdwidewebring.net/random.html"
          className="block hover:text-red-500"
        >
          Random Weirdo
        </a>
        ~
        <a
          href="https://weirdwidewebring.net/next.html"
          className="block hover:text-red-500"
        >
          Next Weirdo
        </a>
      </div>
      <div className="flex items-center justify-center gap-4 text-xs">
        <a
          href="https://weirdwidewebring.net"
          className="inline-block hover:text-red-500"
        >
          All the Weirdos
        </a>
        ~
        <a
          href="https://weirdwidewebring.net/join.html"
          className="inline-block hover:text-red-500"
        >
          Get Weird
        </a>
      </div>
    </section>
  )
}
