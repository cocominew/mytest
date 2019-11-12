import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)
//最后一步打包，把dist删除，在package.json中添加"build":"webpack --mode development"，然后终端运行npm run build
// cnpm i vuex -S 安装vuex
import Vuex from 'vuex'
Vue.use(Vuex)

//进入网站就调用localstorage的数据
var car=JSON.parse(localStorage.getItem('car')||'[]')

var store=new Vuex.Store({
  state:{//相当于data, this.$store.state.***
    car:car,//将购物车中商品数据用数组存起来
  },
  mutations:{
    //相当于methods, this.$store.commit('方法名称','按需传入参数')
    addToCar(state,goodsinfo){
      var flag=false

      state.car.some(item=>{
        if(item.id==goodsinfo.id){
          item.count +=parseInt(goodsinfo.count)
          flag=true
          return true
        }
      })

      if(!flag){
        state.car.push(goodsinfo)
      }
      localStorage.setItem('car',JSON.stringify(state.car))
    },
    updateGoodsInfo(state,goodsinfo){
      //购物车页面更新商品数量
      state.car.some(item=>{
        if(item.id==goodsinfo.id){
          item.count=parseInt(goodsinfo.count)
          return true
        }
      })
      //修改完数量，把最新的保存到本地存储
      localStorage.setItem('car',JSON.stringify(state.car))
    },
    removeFormCar(state,id){
      state.car.some((item,i)=>{
        if(item.id==id){
          state.car.splice(i,1)
          return true
        }
      })
      localStorage.setItem('car',JSON.stringify(state.car))
    },
    updateGoodsSelected(state,info){
      state.car.some(item=>{
        if(item.id==info.id){
          item.selected=info.selected
        }
      })
       localStorage.setItem('car',JSON.stringify(state.car))
    }
  },
  getters:{//this.$store.getters.***
    getAllCount(state){
      var c=0;
      state.car.forEach(item=>{
        c+=item.count
      })
      return c
    },  
    getGoodsCount(state){
    var o=[]
    state.car.forEach(item=>{
      o[item.id]=item.count
    })
    return o
  },
  getGoodsSelected(state){
    var o={}
    state.car.forEach(item=>{
      o[item.id]=item.selected
    })
    return o
  },
  getGoodsCountAndAmount(state){
    var o={
      count:0,//勾选的数量
      amount:0,//勾选的总价
    }
    state.car.forEach(item=>{
      if(item.selected){
        o.count+=item.count
        o.amount+=item.price*item.count
      }
    })
    return o
  }
  },
  
})

import moment from 'moment'//导入格式化时间的插件
Vue.filter('dateFormat',function(dataStr,pattern="YYYY-MM-DD HH:mm:ss"){
   //cnpm i moment -S装时间 
  return moment(dataStr).format(pattern)
})

import VueResource from 'vue-resource'
Vue.use(VueResource)
//全局设置根路径
Vue.http.options.root='http://www.liulongbin.top:3005'
//全局设置post时候表单数据格式组织形式
Vue.http.options.emulateJSON=true

import './lib/mui/css/mui.css'
import './lib/mui/css/icons-extra.css'
import './lib/mui/js/mui.js'

// import{Header,Swipe, SwipeItem,Button,Lazyload} from 'mint-ui'
// Vue.component(Header.name,Header)
// Vue.component(Swipe.name, Swipe)
// Vue.component(SwipeItem.name, SwipeItem)
// Vue.component(Button.name, Button)
// Vue.use(Lazyload);
import 'mint-ui/lib/style.css'
import 'mint-ui/lib/switch/index.js'
import MintUI from 'mint-ui'
Vue.use(MintUI)



//安装图片预览插件cnpm i vue-preview -S
import VuePreview from 'vue-preview'
Vue.use(VuePreview)

import router from './router.js'

import app from './App.vue'//导入app组件



var vm=new Vue({
    el:'#app',
    render:c=>c(app),
    router,
    store//挂载store
})