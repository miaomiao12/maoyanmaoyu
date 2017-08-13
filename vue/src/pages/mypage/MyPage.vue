<template>
  <div class="mypage">
    <my-header></my-header>
    <div class="login-reg">
      <img src="#" alt="miao~ " />
      <span class="btn-login-reg">登录/注册</span>
    </div>
    <div class="my-baby">
      <ul>
        <li class="info">消息</li>
        <li class="cart">购物车</li>
        <li class="oder">我的订单</li>
        <li class="address">收货地址管理</li>
        <li class="growth">成长快乐</li>
      </ul>
    </div>
    <div  class="cat-baby">
      <ul>
        <li class="cat-friend">猫友</li>
        <li class="cat-circle">猫圈</li>
        <li class="collect">收藏</li>
        <li class="cut-account">切换账号</li>
      </ul>
    </div>
    <common-footer></common-footer>
  </div>

</template>

<script>
  import Axios from "axios"
  import CommonFooter from "../../components/CommonFooter"
  import MyHeader from "./MyHeader"
export default {
    data(){
      return {}
  },
  components:{
    CommonFooter,
      MyHeader
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  .myPage{
    width: 100%;
    /*position: fixed;*/
    position: absolute;
  }
  .login-reg{
    /*flex: 1;*/
    width: 100%;
    height: 1.5rem;
    /*display: block;*/
    margin-top: 1rem;
    /*position: relative;*/
    /*top: 1rem;*/
    font-size: 0.6rem;
    line-height: 1.5rem;
    background: #FF9999;
    border-bottom: 0.2rem solid #cccccc;
  }
  .login-reg .btn-login-reg{
    border: 0.05rem #cccccc;
    background: #ce8483;
    color: #f6f6f6;
  }
  .myPage .my-baby{
    width: 100%;
    height: 1rem;
  }


</style>
