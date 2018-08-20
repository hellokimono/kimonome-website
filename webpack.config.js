const path = require("path");
const distFolder = path.resolve(__dirname, "dist");

const CopyWebpackPlugin = require("copy-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

module.exports = {
  entry: ["./assets/js/app.js", "./assets/css/app.scss"],
  output: {
    path: `${distFolder}/js`,
    filename: "bundle.js"
  },
  plugins: [
    new CopyWebpackPlugin([
      { from: "*.php", to: ".." },
      { from: "style.css", to: ".." }
    ]),
    new MiniCssExtractPlugin({
      filename: `../css/bundle.min.css`
    })
    //new OptimizeCSSAssetsPlugin({})
  ],
  module: {
    rules: [
      {
        test: /.scss$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"]
      },
      {
        test: /\.(woff(2)?|ttf|eot|otf)(\?v=\d+\.\d+\.\d+)?$/,
        use: [
          {
            loader: "file-loader",
            options: {
              name: "[name].[ext]",
              outputPath: "../fonts/"
            }
          }
        ]
      },
      {
        test: /\.(svg|jpg|png)(\?v=\d+\.\d+\.\d+)?$/,
        use: [
          {
            loader: "file-loader",
            options: {
              name: "[name].[ext]",
              outputPath: "../img/"
            }
          }
        ]
      }
    ]
  }
};
