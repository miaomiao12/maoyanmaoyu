<template>
  <div class="photo">
    <ul class="header">
      <li class="left-btn">
        <router-link to="/action">取消</router-link></li>
      <li>发帖</li>
      <li class="right-btn" @click="send">发送</li>
    </ul>
    <div class="title">
      <input type="text" v-model="title" placeholder="输入帖子标题"/>
    </div>
    <div class="content">
      <textarea v-model="content" cols="31" rows="10" placeholder="输入帖子内容"></textarea>
    </div>
    <div class="footer">
      <a href="javascript:;" class="upload">选择图片
        <input class="change" type="file" multiple="multiple" />
      </a>
      <button class="btn">确认</button>
    </div>
  </div>
</template>
<script>
  import Axios from 'axios'
  export default {
    data() {
      return{
        title:"",
        content:""
      }
    },
    methods:{
      send:function(){
        var _this = this;
        Axios.get("http://localhost:3000/insert_to_trends",{
          params:{
              title:this.title,
              content:this.content
          }
        });
      }
    }

  }
</script>
<style scoped>
  @import "../../assets/css/reset.css";
  .photo{
    font-size: 0.5rem;
  }
  .header{
    height: 1rem;
    text-align: center;
    background: #ccc;
    display: flex;
  }
  .header a{
    color: #000;
  }
  .header li{
    flex: 1;
    float: left;
  }
  .header .left-btn{
    margin-left: 0.2rem;
  }
  .header .right-btn{
    margin-right: 0.2rem;
  }
  .content{
    font-size: 0.4rem;
    margin-top: 0.2rem;
  }
  .title{
    font-size: 0.4rem;
    height: 1rem;
    float: left;
  }
  .footer{
    font-size: 0.3rem;
    position: fixed;
    bottom: 0;
  }
  .upload{
    position: relative;
    margin: 0.2rem;
    border: 1px solid #999;
    font-size: 0.4rem;
    color: #000;
  }
  .change{
    position: absolute;
    overflow: hidden;
    right: 0;
    top: 0;
    opacity: 0;
  }
</style>
