export default function BookLine({ label, content }: { label: string; content: string | number }) {
	return (
		<p>
			<span className="font-bold text-gray-700">{label}</span> {content}
		</p>
	)
}
