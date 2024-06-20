/** @type {import('next').NextConfig} */
const nextConfig = {
	output: 'export',
	reactStrictMode: true,
	images: {
		remotePatterns: [
			{
				protocol: 'https',
				hostname: 'cdn.dribbble.com',
			},
			{
				protocol: 'https',
				hostname: '*.public.blob.vercel-storage.com',
			},
		],
	},
}

module.exports = nextConfig
