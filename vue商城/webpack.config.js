
const path=require('path')
const webpack=require('webpack')
const htmlWebpackPlugin=require('html-webpack-plugin')
const VueLoaderPlugin=require('vue-loader/lib/plugin')
//通过Node中的模块操作，向外暴露配置对象
module.exports={
mode:'development',
entry:path.join(__dirname,'./src/main.js'),//入口，要打包哪个文件
output:{
    path:path.join(__dirname,'./dist'),//输出到那个目录去
    filename:'bundle.js'//指定输出的文件名称
},
// devServer:{
//     //配置dev-server的第二种方式
//     open:true,//自动打开浏览器
//     port:3000,//设置运行端口
//     contentBase:'src',//指定托管根目录
//     hot:true,//启动热更新
// },
plugins:[//新的方法不用导入bundle.js 
   
   new webpack.HotModuleReplacementPlugin(),//启用热更新
   new htmlWebpackPlugin({//生成html插件
    template:path.join(__dirname,'./src/index.html'),//根据页面路径生成内存中的页面
    filename:'index.html'//指定生成页面的名称
   }),
   new VueLoaderPlugin(),
  
],
module:{//用于配置所有第三方模块加载器
    rules:[//匹配规则
        {test:/\.css$/,use:['style-loader','css-loader']},//从后往前调用
        {test:/\.less$/,use:['style-loader','css-loader','less-loader']},
        {test:/\.scss$/,use:['style-loader','css-loader','sass-loader']},
        {test:/\.(jpg|png|gif|bmp|jpeg)$/,use:'url-loader?limit=8910&name=[hash:8]-[name].[ext]'},
        //limit值等于图片字节大小时不会被转换成base64格式 ,一样名称的图片加hash值
        {test:/\.(ttf|woff|eot|svg|woff2)$/,use:'url-loader'},
        {test:/\.js$/,use:'babel-loader',exclude:/node_modules/},//配置babel转换es语法
        {test:/\.vue$/,use:'vue-loader'},//处理.vue文件的loader
    ]
},
 resolve:{
//     alias:{//设置vue 被导入的路径
//         "vue$":"vue/dist/vue.js"
//     }
}
}