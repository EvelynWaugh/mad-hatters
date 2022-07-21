const colors = require("tailwindcss/colors");
module.exports = {
  mode: "jit",
  content: ["./**/*.php"],
  theme: {
    screens: {
      "3x1": {max: "1920px"},
      "2xl": {max: "1535px"},
      // => @media (max-width: 1535px) { ... }

      xl: {max: "1279px"},
      // => @media (max-width: 1279px) { ... }

      lg: {max: "1023px"},
      // => @media (max-width: 1023px) { ... }

      md: {max: "767px"},
      // => @media (max-width: 767px) { ... }

      sm: {max: "639px"},
      // => @media (max-width: 639px) { ... }

      ssm: {max: "380px"},
      sssm: {max: "320px"},
    },
    extend: {
      spacing: {
        128: "32rem",
        144: "36rem",
      },
      borderRadius: {
        "4xl": "2rem",
      },
      colors: {
        gray: colors.gray,
        blue: colors.sky,
        red: colors.rose,
        pink: colors.fuchsia,
        k_blue: {
          450: "#4764D7",
          500: "#3454D2",
        },
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
