<template>
    <div>
        <!-- 顶部区域 -->
<div id="slider" class="mui-slider">
    <div id="sliderSegmentedControl" class="mui-scroll-wrapper mui-slider-indicator mui-segmented-control mui-segmented-control-inverted">
    <div class="mui-scroll">
        <a :class="['mui-control-item',item.id==0?'mui-active':'']" v-for="item in cates" :key="item.id" @click="getPhotoListByCateId(item.id)">
            {{item.title}}
        </a>
        <!-- @tap只有mui能用 -->
    </div>
</div>
</div>
<!-- 图片列表 -->
<ul class="photo-list">
  <router-link v-for="item in list" :key="item.id" :to="'/home/photoinfo/'+item.id" tag="li">
    <img v-lazy="item.img_url">
    <div class="info">
        <h1 class="info-title">{{item.title}}</h1>
        <div class="info-body">{{item.zhaiyao}}</div>
    </div>
  </router-link>
</ul>
    </div>
</template>
<script>
// 先安装cnpm i @babel/plugin-transform-modules-commonjs和cnpm i @babel/plugin-transform-strict-mode -D，
//在babelrc中配置"@babel/plugin-transform-modules-commonjs","transform-remove-strict-mode"
import mui from '../../lib/mui/js/mui.js'


export default{
    data(){
        return{
            cates:[],
            list:[],
        };
    },
    created(){
        this.getAllCategory(),
        this.getPhotoListByCateId(0)
    },
    mounted(){//当组件中的dom渲染好并放到页面中后会执行
        //初始化滑动控件
    mui('.mui-scroll-wrapper').scroll({
        deceleration: 0.0005 //flick 减速系数，系数越大，滚动速度越慢，滚动距离越小，默认值0.0006
    });
    },
    methods:{
        getAllCategory(){
            this.$http.get("api/getimgcategory").then(result=>{
                if(result.body.status===0){
                    result.body.message.unshift({title:"全部",id:0});
                    this.cates=result.body.message;
                }
            })
        },
        getPhotoListByCateId(cateId){
            this.$http.get('api/getimages/'+cateId).then(result=>{
                if(result.body.status===0){
                    this.list=result.body.message
                }
            })
        }
    }
}
</script>
<style lang="scss" scoped>
*{
    touch-action: pan-y;
}

.photo-list{
    list-style: none;
    margin: 0px;
    padding: 10px;
    padding-bottom: 0;
    li{
    background-color: #ccc;
    margin-bottom: 10px;
    text-align: center;
    box-shadow: 0 0 6px #999;
    position: relative;
    img{
        width: 100%;
        vertical-align: middle;
    }
      img[lazy=loading] {
        width: 40px;
        height: 300px;
        margin: auto;}  
    .info{
        color: white;
        text-align: left;
        position: absolute;
        bottom:0px;
        background-color: rgba(0,0,0,0.4);
        max-height: 84px;
      .info-title{
          font-size: 14px;
      }  
      .info-body{
          font-size: 13px;
      }
    }
    }
}
</style>