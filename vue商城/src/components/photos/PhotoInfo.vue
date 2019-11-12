<template>
    <div class="photoinfo-container">
        <h3>{{photoinfo.title}}</h3>
        <p class="subtitle">
            <span>发表时间:{{photoinfo.add_time | dateFormat}}</span>
            <span>点击:{{photoinfo.click}}</span>
        </p>
        <hr>
        <!-- 缩略图 -->
        <!-- <img class="preview-img" v-for="(item,index) in list" 
        :src="item.src" height="100" @click="$preview.open(index,list)" :key="item.src"> -->
        <div class="thumbs">
        <vue-preview :slides="list" @close="handleClose"></vue-preview></div>
        <!-- 图片内容 -->
        <div class="content" v-html="photoinfo.content"></div>
        <!-- 评论 -->
        <cmt-box :id=id></cmt-box>
    </div>
</template>
<script>
import comment from '../subcomponents/comment.vue'
export default{
    data(){
        return{
            id:this.$route.params.id,
            photoinfo:{},//图片详情
            list:[],//缩略图
        };
    },
    created(){
        this.getPhotoInfo(),
        this.getThumbs()
    },
    methods:{
        getPhotoInfo() {
            this.$http.get('api/getimageInfo/'+this.id).then(result=>{
                if(result.body.status===0){
                    this.photoinfo=result.body.message[0];
                }else{

                }
            }
            )
        },
        getThumbs(){
            this.$http.get('api/getthumimages/'+this.id).then(result=>{
                if(result.body.status===0){
                    //循环每个图片数据
                    result.body.message.forEach(item=>{
                        item.w=600
                        item.h=400
                        item.msrc=item.src
                    });
                    this.list=result.body.message;
                }
            })
        }
    },
    components:{
        'cmt-box':comment
    }
}
</script>
<style lang="scss" scoped>
.photoinfo-container{
    padding: 3px;
    h3{
        color: #26A2FF;
        font-size: 15px;
        text-align: center;
        margin: 15px 0;
    }
    .subtitle{
        display: flex;
        justify-content: space-between;
        font-size: 13px;
    }
    .content{
        font-size: 13px;
        line-height: 30px;
    }
  .thumbs{
      /deep/ .my-gallery{//deep生辰作用选择器
           display: flex;
           flex-wrap: wrap;//默认换行
           figure{
               width: 30%;
               margin: 5px;
               img{
                   width: 100%;
                   box-shadow: 0 0 8px #999;
                   border-radius: 5px;
               }
           }
       }
   }
}
 
</style>