import { Press_Start_2P, PT_Mono, PT_Sans, PT_Sans_Caption, PT_Sans_Narrow } from "next/font/google"
// import localFont from '@next/font/local'

// export const vaultAlarm = localFont({
//   src: './fonts/Vault-Alarm/VaultAlarm-Regular.woff2',
//   variable: '--font-vault-alarm',
//   display: 'swap',
//   weight: '400',
// })

export const ptSans = PT_Sans({
	variable: '--font-pt-sans',
	weight: ['400', '700'],
	display: 'swap',
	subsets: ['latin'],
})

export const ptSansNarrow = PT_Sans_Narrow({
	variable: '--font-pt-sans-narrow',
	weight: ['400', '700'],
	display: 'swap',
	subsets: ['latin'],
})

export const ptSansCaption = PT_Sans_Caption({
	variable: '--font-pt-sans-caption',
	weight: ['400', '700'],
	display: 'swap',
	subsets: ['latin'],
})

export const ptMono = PT_Mono({
	variable: '--font-pt-mono',
	weight: '400',
	display: 'swap',
	subsets: ['latin'],
})

export const pressStart = Press_Start_2P({
	variable: '--font-press-start-2p',
	weight: ['400'],
	display: 'swap',
	subsets: ['latin'],
})
