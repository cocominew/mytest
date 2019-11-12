<template>
<div class="mui-numbox" data-numbox-min='1' style="height:25px;">
    <button class="mui-btn mui-btn-numbox-minus" type="button">-</button>
    <input id="test" class="mui-input-numbox" type="number" :value="initcount" 
    @change="countChanged" ref="numbox" readonly/>
    <button class="mui-btn mui-btn-numbox-plus" type="button">+</button>
</div>
</template>
<script>
import mui from '../../lib/mui/js/mui.min.js'
export default{
    mounted(){
        //初始化数量盒子
        mui(".mui-numbox").numbox();
        console.log(this.max)
    },
    methods:{
        countChanged(){
            //数量值改变立即同步到购物车的store中，覆盖原来的值
        this.$store.commit("updateGoodsInfo",{
            id:this.goodsid,
            count:this.$refs.numbox.value
        })
        }
    },
    props:['initcount','goodsid']
    
}
</script>
<style lang="scss" scoped>

</style>