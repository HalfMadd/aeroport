const path = require("path");

module.exports = {
  mode: "development",
  entry: {
    index: "./assets/js/index.js"
  },
  output: {
    filename: "js/[name].js",
    path: path.resolve(__dirname, "./web")
  }
}
