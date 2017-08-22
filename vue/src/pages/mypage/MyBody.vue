<template>
  <div class="my-body">
    <div class="person-info" v-for="info in info" >
      <img :src="info.head_img" alt="tx" class="head-photo"/>
      <div class="info" >
        <span class="u-name" >monster：{{info.u_nickname}}</span>
        <span class="u-id" >baby：{{info.u_name}}</span>
        <span class="person-home"><router-link to="/person-home">个人主页 &gt;</router-link></span>
      </div>
    </div>
    <div class="my-baby">
      <ul>
        <li class="info">消息</li>
        <li class="cart"><router-link to="/buy-cart">购物车</router-link></li>
        <li class="oder"><router-link to="/oder">我的订单</router-link></li>
        <li class="address"><router-link to="/address">收货地址管理</router-link></li>
        <li class="growth"><router-link to="/growth">成长快乐</router-link></li>
      </ul>
    </div>
    <div  class="cat-baby">
      <ul>
        <li class="cat-friend"><router-link to="friend">猫友</router-link></li>
        <li class="cat-circle">猫圈</li>
        <li class="collect">收藏</li>
        <li class="cut-account">切换账号</li>
        <li></li>
      </ul>
    </div>
  </div>
</template>

<script>
  import Axios  from 'axios'
//  import jQuery from "../assets/js/jquery-1.12.4.min.js"
    export default{
      name: 'body',
      data(){
    return {
      info: ""
    }
  },

      components: {

      },

      mounted:function() {
        var _this = this;
        var  account=sessionStorage.getItem('u_id');
        if(!account) _this.$router.push('/login');
        Axios.get("http://localhost:3000/users/myinfo",{
          params:{
            u_id:sessionStorage.getItem("u_id")
          }
        }).then((res) => {
          console.log(res.data);
          _this.info = JSON.parse(res.data);
//        console.log(res.data.head_img);
        })
      }
    }
</script>

<style scoped>
  .my-body{
    z-index: 99;
  }
  .my-body a{
    color: #ccc;
  }
  .person-info{
    flex: 1;
    width: 100%;
    height: 1.5rem;
    /*display: block;*/
    margin-top: 1rem;
    /*position: relative;*/
    /*top: 1rem;*/
    font-size: 0.3rem;
    line-height: 1.5rem;
    background: #f6f6f6;
    border: 0.2rem solid #f6f6f6;
    position: relative;
    /*border-bottom: 0.2rem solid #cccccc;*/
  }
  .person-info img{
    width: 1.5rem;
    height: 1.5rem;
    margin-left: 0.2rem;
  }
  .person-info .person-home{
    border: 0.05rem;
    /*background: #ce8483;*/
    color: #ccc;
    /*position: absolute;*/
    right: 0.5rem;
  }

  .my-body .my-baby{
    width: 100%;
  }

  .info{
    position: absolute;
    top: -0.1rem;
    left: 2rem;
    height: 1.8rem;
  }
  .info .u-name,.u-id,.person-home{
    width: 3rem;
    position: absolute;
  }
  .info .u-name{
    top: -0.4rem;
    /*margin-bottom: 0.2rem;*/
  }
  .info .person-home{
    top: 0.5rem;
    left: 2.5rem;
  }
  .my-body .my-baby li{
    height: 1rem;
    line-height: 1rem;
    font-size: 0.4rem;
    color: #CCC;
    background-color: #f6f6f6;
    border-bottom: 0.05rem solid #ccc;
    padding-left: 0.2rem;
  }
  .my-body .cat-baby li{
    height: 1rem;
    line-height: 1rem;
    font-size: 0.4rem;
    color: #CCC;
    background-color: #f6f6f6;
    border-bottom: 0.05rem solid #ccc;
    padding-left: 0.2rem;
  }
</style>
