<template>
  <div  id="regForm">
    <img src="../assets/mao.jpg">
    <input class="input" type="text" name="username" v-model="username" placeholder="  账号" @blur="validate">
    <hr>
    <!-- validate 验证 -->
    <span id="nouseSpan" class="nonespan">您不可以使用特殊符号和空格'%','#','='</span>
    <span id="nonoSpan" class="nonespan">SORRY，该账号已经存在</span>

    <input class="input" type="password" name="password" v-model="password" placeholder="  密码">
    <hr>
    <button id="regButton" @click="reg">注册</button>
  </div>
</template>


<script>
  import Axios from "axios";
  import { Button } from 'mint-ui';
  import jQuery from "../assets/js/jquery-1.12.4.min.js"

  export default {
    data () {
    return {
      username:"",
      password:""
    }
  },
    methods:{
      reg:function(){
        var _this=this;
        Axios.get("http://localhost:3000/reg",{
          params:{
            username:this.username,
            password:this.password
          }
        }).then(function (res) {
          var value = res.data;
          if(value == 1){
            _this.$router.push("/login");
          }
        });
      },
      validate:function(){
        var unstr=this.username;
        var psdstr=this.password;
        var flag = true;
        var arr=['%','#','=',' ',''];//规则限制数组
        //43-59行是用来验证输入账号是否有规则限制数组中的符号
        for (var i=0; i < unstr.length ; i++) {
          for (var j =0; j < arr.length; j++) {
            if(unstr[i]==arr[j]){
              flag = false;
            }
          }
        }
        if(flag == true){
          $("#nouseSpan").removeClass("blockspan");
          $("#nouseSpan").addClass("nonespan");
          //符合规则数组就传数据给中间层 然后查数据库
          Axios.get("http://localhost:3000/hasreg",{
            params:{
              username:this.username
            }
          }).then(function (res) {
            if (res.data == 1) {
              $("#nonoSpan").removeClass("nonespan");
              $("#nonoSpan").addClass("blockspan");
            }else if (res.data == 0) {
              $("#nonoSpan").removeClass("blockspan");
              $("#nonoSpan").addClass("nonespan");
            }
          });
        }else if(flag==false){
          $("#nouseSpan").removeClass("nonespan");
          $("#nouseSpan").addClass("blockspan");
          $("#regButton").disabled=true;
        }
      }
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

  #regForm{
    text-align: center;
  }
  #regForm img{
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
  #regButton{
    width: 98%;
    height: 1rem;
    font-size: 0.3rem;
    background: #41b883;
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
