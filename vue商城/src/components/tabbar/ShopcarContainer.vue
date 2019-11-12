<template>
<div class="shopcar-container">
<div class="goods-list">
    <!-- 列表区 -->
    <div class="mui-card" v-for="(item,i) in goodslist" :key="item.id">
        <div class="mui-card-content">
        <div class="mui-card-content-inner">
            <mt-switch v-model="$store.getters.getGoodsSelected[item.id]"
            @change="selectedChanged(item.id,$store.getters.getGoodsSelected[item.id])"></mt-switch>
            <img :src="item.thumb_path" alt="">
            <div class="info">
                <h1>{{item.title}}</h1>
                <p>
                    <span class="price">￥{{item.sell_price}}</span>
                    <numbox :initcount="$store.getters.getGoodsCount[item.id]" :goodsid="item.id"></numbox>
                    <a href="" @click.prevent="remove(item.id,i)">删除</a>
                    <!-- item.id是删除store里的数据，i是删除goodslist里的 -->
                </p>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- 结算区 -->
<div class="mui-card">
        <div class="mui-card-content">
        <div class="mui-card-content-inner jiesuan">
            <div class="left">
                <p>总计(不含运费))</p>
                <p>已勾选商品 <span class="red">{{$store.getters.getGoodsCountAndAmount.count}}</span> 件，
                总价 <span class="red">￥{{$store.getters.getGoodsCountAndAmount.amount}}</span> </p>
            </div>
            <mt-button type="danger">去结算</mt-button>
        </div>
        
    </div>
</div>
</div>
</template>
<script>
import numbox from '../subcomponents/shopcar_numbox.vue'

export default{
    data(){
        return{
            goodslist:[],
        }
    },
    created(){
        this.getGoodsList()
    },
    methods:{
        getGoodsList(){
            //获取store中的所有商品id，拼接出用逗号分割的字符串
        var idArr=[]
        this.$store.state.car.forEach(item=>idArr.push(item.id))
        if(idArr.length<=0){
            return;
            //若没有商品数据则直接返回
        }
        this.$http.get('api/goods/getshopcarlist/'+idArr.join(',')).then(result=>{
            if(result.body.status===0){
                this.goodslist=result.body.message
            }
        })
        },
        remove(id,index){
            this.goodslist.splice(index,1);
            this.$store.commit('removeFormCar',id)
        },
        selectedChanged(id,val){
            console.log(id+'--'+val)
            this.$store.commit("updateGoodsSelected",{id,selected:val})
        }
       

    },
    components:{
        numbox
    }
}
</script>
<style lang="scss" scoped>
.shopcar-container{
    background-color: #eee;
    overflow: hidden;
    .goods-list{
        .mui-card-content-inner{
            display: flex;
            align-items: center;
        }
        img{
            width: 60px;
            height: 60px;
        }
        .info{
            display: flex;
            justify-content: space-between;
            flex-direction: column;
         .price{color: red}
          h1{
            font-size: 13px
        }   
        }
    }
    .jiesuan{
        display: flex;
        justify-content: space-between;
        align-items: center;
        .red{
            color: red;
            font-weight: bold;
            font-size: 16px
        }
    }
}
</style>