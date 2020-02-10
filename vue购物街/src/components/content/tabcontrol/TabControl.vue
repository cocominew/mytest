<template>
    <div id="tabcontrol">
        <div class="tabcontrol-item" v-for="(item,index) in titles" 
        @click="itemclick(index)"
        :class="{active:index===current}">
            <span>{{item}}</span>
        </div>
    </div>
</template>
<script>
export default {
    name:"TabControl",
    props:{
        titles:{
            type:Array,
            default(){
                return []
            }
        }
    },
    data(){
        return{current:0}
    },
    methods:{
        itemclick(index){
            this.current=index;
            this.$emit('tabclick',index)
        }
    } 
    
}
</script>
<style scoped>
#tabcontrol{
    display: flex;
    line-height: 40px;
    height: 40px;
    text-align: center;
    background-color: #fff;
    z-index: 1;
}
.tabcontrol-item{
    flex: 1
}
.active span{ 
    padding: 5px; 
    border-bottom: 3px solid var(--color-tint);
}
.active{
    color:var(--color-high-text);
}
</style>