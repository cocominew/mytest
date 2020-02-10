<template>
    <div id="tabbar">
    <slot></slot>
    </div>
</template>
<script>
export default {
    name:"TabBar"
}
</script>
<style scoped>
#tabbar{
    display: flex;
    height: 49px;
    position: fixed;
    bottom: 0px;
    right:0px;
    left: 0px;
    text-align: center;
    font-size: 14px;
    background-color: #f6f6f6;
    box-shadow: 0px -2px 3px rgba(100, 100, 100, .2)
}

</style>