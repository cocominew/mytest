<template>
   <div id="home">
       <nav-bar class="home-nav"><div slot="center">购物街</div></nav-bar>
       <tab-control :titles="['流行','新款','精选']"
        @tabclick="tabclick" 
        ref="tabControl" class="tab-control" v-show="isTabFixed"></tab-control>
       <scroll class="content" ref="scroll" 
       :probeType="3" :pullUpLoad="true"
       @scroll="contenScroll"
       @pulling="lodeMore">
       <home-swiper :banner="banners" @swiperImageLoad="swiperImageLoad"/>
       <recommend :recommend='recommends'></recommend>
       <feature-item></feature-item>
       <tab-control :titles="['流行','新款','精选']"
        @tabclick="tabclick" 
        ref="tabControl" ></tab-control>
       <goods-list :goods="goods[currentType].list"></goods-list>
       </scroll>
       <back-top @click.native="backtop" v-show="isactive"></back-top>
   </div>
</template>
<script>
import NavBar from 'components/common/navbar/NavBar'
import Scroll from 'components/common/scroll/Scroll'
import TabControl from 'components/content/tabcontrol/TabControl'
import GoodsList from 'components/content/goods/GoodsList'
import BackTop from 'components/content/backtop/BackTop'


import HomeSwiper from './childComps/HomeSwiper'
import Recommend from './childComps/Recommend'
import FeatureItem from './childComps/FeatureItem'

import {getHomeMultidata,getHomeGoods} from 'network/home'
import { log } from 'util'

export default {
    name:"Home",
    components:{
        NavBar,
        HomeSwiper,
        Recommend,
        FeatureItem,
        TabControl,
        GoodsList,
        Scroll,
        BackTop,
    },
    data(){
        return{
            banners:[],
            recommends:[],
            goods:{
                'pop':{page:0,list:[]},
                'new':{page:0,list:[]},
                'sell':{page:0,list:[]},
            },
            currentType:'pop',
            isactive:false,
            tabOffsetTop:0,
            isTabFixed:false,
        }
    },
    created(){
       this.getHomeMultidata()
       this.getHomeGoods('pop')
       this.getHomeGoods('new')
       this.getHomeGoods('sell')
    },
    mounted(){
        const refresh=this.debounce(this.$refs.scroll.refresh,500)
        //监听图片加载完成,$bus需要加原型
       this.$bus.$on('itemImageLoad',()=>{
           refresh()
       })
    },
    methods:{
        //防抖函数处理，防止请求多次
        debounce(func,delay){
            let timer=null
            return function(...args){
                if(timer) clearTimeout(timer)
                timer=setTimeout(()=>{
                    func.apply(this,args)
                },delay)
            }
        },
        getHomeMultidata(){
        getHomeMultidata().then(res=>{
           this.banners=res.data.data.banner.list;
           this.recommends=res.data.data.recommend.list;
           console.log(res);
        })
        },
        getHomeGoods(type){
            const page=this.goods[type].page+1;
            getHomeGoods(type,page).then(res=>{
                console.log(res);
                this.goods[type].list.push(...res.data.data.list)
                this.goods[type].page+=1
                //完成上拉加载更多，不加只能拉一次
                this.$refs.scroll.finishPullUp()
            })
        } ,
        // 请求数据方法
        tabclick(index){
         switch(index){
             case 0:
                 this.currentType='pop'
                 break
             case 1:
                 this.currentType='new'
                 break
             case 2:
                 this.currentType='sell'
         }
    },
    // 流行，新款，精选选择
        contenScroll(position){
        //判断BackTop是否显示
        this.isactive=(-position.y)>1000
        //决定tabControl是否吸顶
        this.isTabFixed=(-position.y)>this.tabOffsetTop
    },
        backtop(){
        this.$refs.scroll.scrollTo(0,0,500)
    },
        lodeMore(){
        this.getHomeGoods(this.currentType)
    },
        swiperImageLoad(){
        this.tabOffsetTop=this.$refs.tabControl.$el.offsetTop;
    }
    }
}
</script>
<style scoped>
#home{
   height: 100vh;
   position: relative;
}
.home-nav{
    background-color:var(--color-tint);
    color: white;
}
.content{
    /* height: calc(100%-93px);
    margin-top: 44px; */
    position: absolute;
    overflow: hidden;
    bottom: 49px;
    left: 0px;
    right: 0px;
    top: 44px;
}
.tab-control{
    position: relative;
    z-index: 9;
}
</style>