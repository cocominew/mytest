<template>
  <div class="goodslist">
      <goods-list-item class="item" v-for="item in goods" :goodsitem="item"></goods-list-item>
  </div>
</template>
<script>
import GoodsListItem from 'components/content/goods/GoodsListItem'
export default {
    name:"GoodsList",
    components:{
        GoodsListItem,
    },
    props:{
        goods:{
            type:Array,
            default(){
                return[]
            }
        }
    }
}
</script>
<style scoped>
.goodslist{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly
}
.item{
    width: 48%
}

</style>