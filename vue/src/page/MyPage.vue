<template>
  <div class="myPage">
    <div class="myHeader">

      <span></span>

    </div>
    <footer-tabs></footer-tabs>
  </div>
</template>

<script>
  import Axios from "axios"
  import FooterTabs from "../components/FooterTabs.vue"
export default {
    data(){
      return {}
  },
  components:{
    FooterTabs
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../assets/css/reset.css";
  @import "../assets/css/iconfont.css";

</style>
