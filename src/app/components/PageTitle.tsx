export default function PageTitle({ children, className }: { children: React.ReactNode; className: string | null }) {
	return <h2 className={`${className ?? null} font-title text-4xl`}>{children}</h2>
}
