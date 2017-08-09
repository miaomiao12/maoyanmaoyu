<template>
  <div class="login">
    <form id="loginForm" action="" method="">
      <img src="../assets/logo.png">
      <input class="input" type="text" name="username" placeholder="账号">
      <input class="input" type="password" name="password" placeholder="密码">
      <button id="loginButton"><router-link to="/reg">登录</router-link></button>

    </form>
  </div>
</template>

<script>
  import Axios from "axios";
  import { Button } from 'mint-ui';

  export default {
    data () {
    return {}
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../assets/css/reset.css";

  h1, h2 {
    font-weight: normal;
  }

  ul {
    list-style-type: none;
    padding: 0;
  }

  li {
    display: inline-block;
    margin: 0 10px;
  }

  a {
    color: #42b983;
  }
  #loginForm img{
    width: 640px;
    height: 640px;
  }
  .input{
    width: 636px;
    height: 100px;
    margin-bottom: 20px;
    font-size:24px;
    line-height:100px;

  }
  #loginButton{
    width: 640px;
    height: 100px;
    font-size: 24px;
  }
</style>

