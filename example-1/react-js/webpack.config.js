const path               = require('path');
const webpack            = require('webpack');
const HtmlWebpackPlugin  = require('html-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');


module.exports = {
    entry: {
         main: './src/index.js',
         vendor: ['lodash']
    },
    plugins: [
        new CleanWebpackPlugin(['dist']),
        new HtmlWebpackPlugin({
            title: 'Code Splitting'
        }),
        new config.optimization.splitChunks({
            name: 'vendor'
        }),
        new config.optimization.splitChunks({
            name: 'manifest'
        })
    ],
    output: {
        filename: '[name].[chunkhash].js',
        // chunkFilename: '[name].bundle.js',
        path: path.resolve(__dirname, 'dist')
    }
    // module: {
    //     rules: [
    //         {
    //             test: /\.css$/,
    //             use: ['style-loader', 'css-loader']
    //         },
    //         {
    //             test: /\.(png|svg|jpg|gif)$/,
    //             use: ['file-loader']
    //         },
    //         {
    //             test: /\.(woff|woff2|eot|ttf|otf)$/,
    //             use: ['file-loader']
    //         },
    //         {
    //             test: /\.xml$/,
    //             use: ['xml-loader']
    //         },
    //         {
    //             test: /\.(csv|tsv)$/,
    //             use: ['csv-loader']
    //         }
    //     ]
    // }
};