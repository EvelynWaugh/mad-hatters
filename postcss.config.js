// module.exports = {
//   plugins: [
//     require("postcss-import"),
//     require("postcss-css-variables"),
//     require("tailwindcss/nesting")(require("postcss-nesting")),
//     require("tailwindcss"),
// 	require("postcss-preset-env")({
// 		features: {"nesting-rules": false},
// 	  }),
//     require("autoprefixer"),
//   ],
// };
module.exports = {
	plugins: [
	  require("postcss-import"),
	  require("postcss-css-variables"),
	  require("tailwindcss/nesting"),
	  require("tailwindcss"),
	//   require("postcss-preset-env"),
	  require("autoprefixer"),
	],
  };

// module.exports = {
// 	plugins: {
// 	  'postcss-import': {},
// 	  'postcss-css-variables': {},
// 	  'tailwindcss/nesting': 'postcss-nesting',
// 	  tailwindcss: {},
// 	  'postcss-preset-env': {
// 		features: { 'nesting-rules': false },
// 	  },
// 	  autoprefixer: {},
// 	}
//   }