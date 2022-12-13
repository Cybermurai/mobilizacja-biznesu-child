const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
    watch :true,
    entry: {
        app: ["./scss/style.scss"]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "[name].css"
        }),
    ],
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"]
            }
        ]
    }
}