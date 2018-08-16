const path = require("path");
const CopyWebpackPlugin = require("copy-webpack-plugin");

module.exports = {
  entry: "./assets/js/app.js",
  output: {
    path: path.resolve(__dirname, "dist/js"),
    filename: "bundle.js"
  },

  plugins: [
    new CopyWebpackPlugin([
      { from: "*.php", to: ".." },
      { from: "style.css", to: ".." }
    ])
  ],
  module: {
    rules: [
      {
        test: /.scss$/,
        use: [
          //   {
          //     loader: "file-loader",
          //     options: {
          //       name: "[name].css",
          //       outputPath: "../css/"
          //     }
          //   },
          { loader: "style-loader/url" },
          {
            loader: "css-loader"
          },

          {
            loader: "sass-loader" // compiles Sass to CSS
          }
        ]
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
