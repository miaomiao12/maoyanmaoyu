<template>
  <div class="my-body">
    <div class="person-info" >
      <img src="../../assets/img/miaomiao1.jpg" alt="tx" class="head-photo"/>
     <span class="u-id">账号：87798</span>
      <span class="u-name">昵称：</span>
      <span class="person-home">个人主页 &gt;</span>
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
        <li></li>
      </ul>
    </div>
  </div>
</template>

<script>
    export default{
      name: 'body',
      components: {

      },
      mounted:function() {
//        Axios.get('http://localhost:3000')
//          .then((res) => {
//
//        })
      }
    }
</script>

<style scoped>
  .person-info{
    /*flex: 1;*/
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
    position: absolute;
    right: 0.5rem;
  }
  .person-info span{
    display: inline-block;
  }
  .my-body .my-baby{
    width: 100%;
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
