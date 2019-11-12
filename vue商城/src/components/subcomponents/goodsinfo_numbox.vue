<template>
<div class="mui-numbox" data-numbox-min='1' data-number-max='max'>
    <button class="mui-btn mui-btn-numbox-minus" type="button">-</button>
    <input id="test" class="mui-input-numbox" type="number" value="1" 
    @change="countChanged" ref="numbox"/>
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
            //文本数据修改立即传递给父组件
        this.$emit('getcount',parseInt(this.$refs.numbox.value))
           
        }
    },
    props:["max"],
    watch:{
        //监听max
        
        max:function(newVal,oldVal){      
            mui(".mui-number").numbox().setOption("max", newVal)
        }
    }
}
</script>
<style lang="scss" scoped>

</style>