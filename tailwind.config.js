module.exports = {
  purge: [
    "./site/templates/*.php",
    "./site/snippets/*.php",
    "./site/stylesheets/*.css",
  ],
  theme: {
    backgroundColor: () => ({
      green: "#0f0",
      interviews: "#d3d3d3",
    }),
    fontFamily: {
      Pregular: ["Pirelli-Regular"],
      Pregularitalic: ["Pirelli-RegularItalic"],
      Pbold: ["Pirelli-Bold"],
      Pbolditalic: ["Pirelli-BoldItalic"],
    },
    backgroundSize: {
      auto: "auto",
      cover: "cover",
      contain: "contain",
      "100%": "100%",
    },
    textColor: {
      green: "#0f0",
      orange: "rgb(255, 85, 0)",
      white: "white",
    },
    height: {
      interviews: "40vw",
    },
  },
  variants: {},
  plugins: [],
};
