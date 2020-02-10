<template>
    <div id="recommend">
        <div class="recommend-item"  v-for="item in recommend">
        <a :href="item.link">
            <img :src="item.image" alt="">
            <div>{{item.title}}</div>
        </a>
        </div>
    </div>
</template>
<script>
export default {
    name:"Recommend",
    props:{
        recommend:{
            type:Array,
            default(){
                return []
            }
        }
    }
}
</script>
<style scoped>
#recommend{
    display: flex;
    padding: 15px 0 30px; 
    border-bottom: 8px solid #eee;
}
.recommend-item{
    flex:1;
    text-align: center;
}
.recommend-item img{
    width: 70px;
    height: 70px;
    margin-top: 15px;
}
</style>