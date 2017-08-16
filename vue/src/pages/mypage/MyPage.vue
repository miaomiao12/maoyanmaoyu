<template>
  <div class="mypage">
    <my-header></my-header>
    <my-body></my-body>
    <common-footer></common-footer>
  </div>

</template>

<script>
  import Axios from "axios"
  import CommonFooter from "../../components/CommonFooter"
  import MyHeader from "./MyHeader"
  import MyBody from "./MyBody"
export default {
    data(){
      return {}
  },
  components:{
    CommonFooter,
      MyHeader,
      MyBody
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


</style>
