<template>
  <div class="cart-list">
  <scroll class="content" ref="scroll">
    <cart-list-item v-for="item in cartList" :key="item.iid" :item-info="item"></cart-list-item>
  </scroll>
  </div>
</template>

<script>
  import { mapGetters } from 'vuex'
  import Scroll from 'components/common/scroll/Scroll'
  import CartListItem from './CartListItem'

	export default {
		name: "CartList",
    components: {
		  Scroll, CartListItem
    },
    props: {
		  cart: {
		    type: Array,
        default() {
		      return []
        }
      }
    },
    computed:{
        ...mapGetters(['cartList'])
    },
    activated(){
      this.$refs.scroll.refresh()
    }
	}
</script>

<style scoped>
  .cart-list{
    height: 100vh;
    position: relative;
  }
  .content {
    position: absolute;
    overflow: hidden;
    bottom: 93px;
    left: 0px;
    right: 0px;
    top: 0px;
  }
</style>
