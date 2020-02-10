<template>
    <div id="detail">
        <detail-nav-bar class="detail-nav" @titleClick="titleclick" ref="nav"/>
        <scroll class="content" ref="scroll" :probeType="3" @scroll="contenScroll">
        <detail-swiper :top-images="topImages"/>
        <detail-base-info :goods="goods"/>
        <detail-shop-info :shop="shop"/>  
        <detail-goods-info :detail-info="detailInfo" @imageLoad="imageLoad"/>
        <detail-param-info ref="params" :param-info="paramInfo"/>
        <detail-comment-info ref="comment" :comment-info="commentInfo"/>
        <goods-list ref="recommend" :goods="recommends"/>
        </scroll>
        <detail-bottom-bar @addCart="addToCart"/>
        <back-top @click.native="backtop" v-show="isactive"></back-top>
        <toast :message="message" :show="show"/>
    </div>
</template>
<script>
import DetailNavBar from './childComps/DetailNavBar'
import DetailSwiper from './childComps/DetailSwiper'
import DetailBaseInfo from './childComps/DetailBaseInfo'
import DetailShopInfo from './childComps/DetailShopInfo'
import DetailGoodsInfo from './childComps/DetailGoodsInfo'
import DetailParamInfo from './childComps/DetailParamInfo'
import DetailCommentInfo from './childComps/DetailCommentInfo'
import DetailBottomBar from './childComps/DetailBottomBar'

import Scroll from 'components/common/scroll/Scroll'
import GoodsList from 'components/content/goods/GoodsList'
import BackTop from 'components/content/backtop/BackTop'
import Toast from 'components/common/toast/Toast'

import {getDetail,Goods,Shop,GoodsParam,getRecommend} from 'network/detail'

export default {
    name:'Detail',
    components:{
       DetailNavBar,
       DetailSwiper,
       DetailBaseInfo,
       DetailShopInfo,
       DetailGoodsInfo,
       DetailParamInfo,
       DetailCommentInfo,
       Scroll,
       GoodsList,
       DetailBottomBar,
       BackTop,
       Toast,
    },
    data(){
        return{
            iid:null,
            topImages:[],
            goods:{},
            shop:{},
            detailInfo:{},
            paramInfo:{},
            commentInfo:{},
            recommends:[],
            titleTopYs:[],
            isactive:false,
            message:"",
            show:false,
            currentIndex:0
        }
    },
    created(){
        //保存传入的iid
        this.iid=this.$route.params.iid
        //根据iid请求数据
        getDetail(this.iid).then(res=>{
            console.log(res);
            const data=res.data.result
           this.topImages=data.itemInfo.topImages
        //获取商品信息
        this.goods=new Goods(data.itemInfo,data.columns,data.shopInfo.services)
        //店铺信息
        this.shop=new Shop(data.shopInfo)
        //商品详情
        this.detailInfo=data.detailInfo;
        // 参数属性
        this.paramInfo=new GoodsParam(data.itemParams.info,data.itemParams.rule)
        //评论
        if(data.rate.cRate!==0){
            this.commentInfo=data.rate.list[0]
        }
        })
        //请求推荐数据
        getRecommend().then(res=>{
            console.log(res);
            this.recommends=res.data.data.list
        })
    },
    methods:{
        imageLoad(){
            this.$refs.scroll.refresh()
            
            this.titleTopYs=[]
            this.titleTopYs.push(0);
            this.titleTopYs.push(this.$refs.params.$el.offsetTop);
            this.titleTopYs.push(this.$refs.comment.$el.offsetTop);
            this.titleTopYs.push(this.$refs.recommend.$el.offsetTop);
            console.log(this.titleTopYs);
        },
        titleclick(index){
            this.$refs.scroll.scrollTo(0,-this.titleTopYs[index],100)
        },
        contenScroll(position){
        this.isactive=(-position.y)>1000
        const positionY=-position.y
        let length=this.titleTopYs.length
        for(let i=0;i<length;i++){
            if(this.currentIndex!==i &&((i < length-1 && positionY >= this.titleTopYs[i] && positionY < this.titleTopYs[i+1])
            ||(i===length-1 && positionY >= this.titleTopYs[i]))){
                this.currentIndex=i
                this.$refs.nav.currentIndex=this.currentIndex
            }
        }
    },
        backtop(){
        this.$refs.scroll.scrollTo(0,0,500)
    },
        addToCart(){
          //获取购物车需要的信息
          const product={}
          product.image=this.topImages[0]
          product.title=this.goods.title
          product.desc=this.goods.desc
          product.price=this.goods.realPrice
          product.iid=this.iid

        //将商品添加到购物车，先安装vuex
          this.$store.dispatch('addCart',product).then(res=>{
              this.show=true;
              this.message=res;
              setTimeout(()=>{
                  this.show=false;
                  this.message=''
              },1500)
          })
        }
    }
}
</script>
<style scoped>
#detail{  
    position: relative;
    z-index: 9;
    background-color: #fff; 
    height: 100vh;
}
.content{
    position: absolute;
    overflow: hidden;
    bottom: 49px;
    left: 0px;
    right: 0px;
    top: 44px;
}

</style>