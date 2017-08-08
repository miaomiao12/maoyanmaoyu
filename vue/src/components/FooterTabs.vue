<template>
<div class="FooterTabs">
  <ul>
    <li><router-link to="/home">首页</router-link></li>
    <li><router-link to="/find">发现</router-link></li>
    <li><router-link to="/send">+</router-link></li>
    <li><router-link to="/shop">商城</router-link></li>
    <li><router-link to="/mine">我的</router-link></li>
  </ul>
</div>
</template>

<script>
  import Axios from "axios"
export default {
    data(){
      return {
        users:[],
        url:'http://localhost:3000/user'
      }
  },
  mounted:function(){}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../assets/css/reset.css";
  .FooterTabs{
    height: 1rem;
    background-color: #f6f6f6;
    position: fixed;
    bottom: 0;
    width: 100%;
  }
  .FooterTabs ul{
    display: flex;
  }
  .FooterTabs ul li{
    flex: 1;
    height: 1rem;
    text-align: center;
    line-height: 1rem;
  }
  .FooterTabs a{
    color: #d6d6d6;
    outline: none;
  }
  .FooterTabs a.router-link-active{
    color: #ff4677;
  }
</style>
