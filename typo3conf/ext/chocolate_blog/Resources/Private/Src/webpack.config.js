const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  entry: './JavaScript/index.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, '../../Public/JavaScript'),
  },
  watch: true,
  module: {
      rules: [
            {
              test: /\.js$/i,
              exclude: /node_modules/,
              use: {
                loader: "babel-loader"
              }

            },
            {
              test: /\.s[ac]ss$/i,
              use: [
                // Creates `style` nodes from JS strings
                "style-loader",
                // Translates CSS into CommonJS
                "css-loader",
                // Compiles Sass to CSS
                "sass-loader",
              ],
            },
      ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].css",
      chunkFilename: "[id].css"
    })
  ]
};