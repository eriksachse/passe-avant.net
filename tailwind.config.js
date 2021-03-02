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
      opinions: "rgba(0,0,0,0.45)",
      white: "white",
      transparent: "transparent",
      menu: "rgba(120,115,111, .93)",
    }),
    placeholderColor: {
      black: "black",
      green: "#0f0",
    },
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
      black: "black",
      gray: "gray",
    },
    fontSize: {
      12: "12px",
      16: "16px",
      17: "17px",
      18: "18px",
      19: "19px",
      23: "23px",
      29: "29px",
    },
    lineHeight: {
      12: "14px",
      16: "18px",
      19: "21px",
      23: "25px",
      29: "31px",
    },
    height: {
      interviews: "40vw",
    },
    borderColor: {
      orange: "rgb(255, 85, 0)",
    },
  },
  variants: {},
  plugins: [],
};
