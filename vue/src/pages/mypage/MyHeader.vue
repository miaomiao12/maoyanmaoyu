<template>
  <div class="myHeader">
    <ul>
      <li class="cart-icon"><img src="../../assets/img/cart-icon.png" alt="cart"/></li>
      <li>铲屎官</li>
      <li class="set-icon"><img src="../../assets/img/set-icon.png" alt="set"/></li>
    </ul>
  </div>
</template>

<script>
    export default{

    }
</script>

<style scoped>
  @import "../../assets/css/reset.css";
  .myHeader{
    width: 100%;
    height: 1rem;
    position: fixed;
    top: 0;
    background: #F9CC9D;
    z-index: 100;
  }
  .myHeader ul{
    display: flex;
  }
  .myHeader li{
    flex: 1;
    height: 1rem;
    line-height: 1rem;
    display: inline-block;
    font-size: 0.5rem;
    text-align: center;
  }
  .myHeader li img{
    width: 0.8rem;
    height: 0.8rem;
  }
  .myHeader .cart-icon{
    margin-left: -0.5rem;
    margin-top: 0.1rem;
  }
  .myHeader .set-icon{
    margin-right: -0.5rem;
    margin-top: 0.1rem;
  }
</style>
