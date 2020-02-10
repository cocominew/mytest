<template>
    <div class="tab-item" @click="itemclick">
        <div v-if="!isactive"><slot name="item-icon"></slot></div>
        <div v-else><slot name="item-icon-active"></slot></div>
        <div :style="activeStyle"><slot name="item-text"></slot></div>
    </div>
    
    
</template>
<script>
export default {
    name:"TabBarItem",
    data(){
        return{}
    },
    props:{
        path:String,
        activecolor:{
            type:String,
            default:'red'
        }
    },
    methods:{
        itemclick(){
            this.$router.replace(this.path)
        }
    },
    computed:{
        isactive(){
          return this.$route.path.indexOf(this.path)!==-1
        },
        activeStyle(){
            return this.isactive ?{color:this.activecolor}:{}
        },
    }
}
</script>
<style scoped>
.tab-item{
    flex: 1;
}
.tab-item img{
    height: 24px;
    width: 24px;
    vertical-align: middle;
}
</style>