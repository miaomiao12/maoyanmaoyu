<template>
  <div id="loginForm" >
    <img src="../assets/mao.jpg">
    <input class="input" type="text" name="username" v-model="username" placeholder="  账号">
    <hr>
    <input class="input" type="password" name="password" v-model="password" placeholder="  密码">
    <hr>
    <button id="loginButton" @click="logining">登录</button>
    <button id="nowreg"><router-link to="/reg">立即注册</router-link></button>
    <span id="tishispan" class="nonespan">账号或密码错误</span>
  </div>
</template>

<script>
  import Axios from "axios";
  import jQuery from "../assets/js/jquery-1.12.4.min.js"

  export default {
    data () {
      return {
        username:"",
        password:""
      }
    },
    methods:{
      logining:function(){
        var _this=this;
        Axios.get("http://localhost:3000/logining",{
          params:{
            username:this.username,
            password:this.password
          }
        }).then((res)=>{
          var token = JSON.parse(res.data);
          var u_name = token.u_name;
          var u_id = token.u_id;
          if(token == 10086){
            $("#tishispan").removeClass("nonespan");
            $("#tishispan").addClass("blockspan");
          }else{
            sessionStorage.setItem('u_id',u_id);
            sessionStorage.setItem('u_name',u_name);//session 键名 userid 键值 token
            // console.log(sessionStorage.getItem('u_id'));
            _this.$router.push("/index");
          }
        })
      },
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
  input{
    border:none;
    outline:medium;
  }
  #loginForm{
    width: 100%;
    text-align: center;
  }

  #loginForm img{
    width: 100%;
  }
  .input{
    width: 98%;
    height: 1rem;
    margin-top: 20px;
    font-size: 0.3rem;
    line-height:1rem;
    border:10px solid block;

  }
  #loginButton{
    width: 98%;
    height: 1rem;
    font-size: 0.3rem;
    border: none;

  }
  #nowreg{
    width: 98%;
    height: 1rem;
    font-size: 0.2rem;
    background: #fff;
    border: none;
  }
  .nonespan{
    width: 100%;
    height: 0.7rem;
    font-size: 0.3rem;
    color: #fff;
    background: #41b883;
    display: none;
  }
  .blockspan{
    width: 100%;
    height: 0.7rem;
    font-size: 0.3rem;
    color: #fff;
    background: #41b883;
    display: block;
  }

</style>
<!--
设置一下placeholder的样式，如：
input::-webkit-input-placeholder {  /* WebKit browsers */
    font-size: 24px;
}
input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    font-size: 24px;
}
input::-moz-placeholder { /* Mozilla Firefox 19+ */
    font-size: 24px;
}
input :-ms-input-placeholder { /* Internet Explorer 10+ */
    font-size: 24px;
}
 -->
