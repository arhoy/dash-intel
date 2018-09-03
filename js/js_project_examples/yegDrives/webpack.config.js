const path  = require('path');
const HTMLWebpackPlugin = require('html-webpack-plugin');
module.exports = {
    entry: ['babel-polyfill','./src/js/index.js','./src/sass/main.scss'],
    output: {
        path: path.resolve(__dirname,'dist'),
        filename: ['js/bundle.js','css/style.css']
    },
    devServer: {
        contentBase: './dist'
    },
    plugins: [
        new HTMLWebpackPlugin({
            filename: 'index.html',
            template: './src/index.html'
        })
    ],
    module:{
        rules: [
            {
                test: [/\.js$/,/\.scss$/],
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader'
                }
            }
        ]
    }
};