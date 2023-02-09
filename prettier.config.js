const options = {
  singleQuote: true,
  jsxSingleQuote: false,
  endOfLine: 'lf',
  semi: false,
  tabWidth: 2,
  printWidth: 128,
	plugins: [
		"prettier-plugin-organize-attributes",
		"prettier-plugin-organize-imports",
		"prettier-plugin-tailwindcss"
	],
	pluginSearchDirs: false
}

module.exports = options
