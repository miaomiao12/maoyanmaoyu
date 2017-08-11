<template>
  <div class="myPage">
    <div class="myHeader">
      <ul>
        <li><img src="../assets/img/cart-icon.png" alt="cart"/></li>
        <li>铲屎官</li>
        <li><img src="../assets/img/set-icon.png" alt="set"/></li>
      </ul>
    </div>
    <common-footer></common-footer>
  </div>

</template>

<script>
  import Axios from "axios"
  import CommonFooter from "../components/CommonFooter"
export default {
    data(){
      return {}
  },
  components:{
    CommonFooter
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../assets/css/reset.css";
  .myPage{
    width: 100%;
  }
  .myHeader{
    width: 100%;
    height: 1rem;
    position: fixed;
    background: #F9CC9D;
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
</style>
