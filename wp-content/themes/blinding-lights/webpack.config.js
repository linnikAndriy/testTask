const  path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');


module.exports = {
    entry: [
        path.join(__dirname,'src/js/main.js'),
        path.join(__dirname,'src/scss/main.scss')
    ],
    output: {
        filename:'./js/main.min.js',
    },
    watchOptions: {
        ignored: '**/node_modules',
    },
    module: {
        rules: [{
            test: /\.js$/,
            exclude: /node_modules/,
            use: 'babel-loader'
        },
            {
                test: /\.(sass|scss)$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader',
                    'postcss-loader',
                ]
            },
            {
                test: /\.(ttf|eot|woff|woff2?|otf|svg)$/,
                type: 'asset/resource',
                generator: {
                    filename: './assets/fonts/[name][ext]',
                }
            },
            {
                test: /\.(png|jpe?g|gif|svg|ico)$/,
                type: 'asset/resource',
                generator: {
                    filename: './assets/images/[name][ext]',
                }
            },
        ]
    },
    plugins: [
        // new CleanWebpackPlugin(),
        new MiniCssExtractPlugin({
            filename: './css/main.min.css'
        }),
    ]
}