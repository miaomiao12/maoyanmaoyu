<template>
  <div class="index-list">
    <div class="list">
      <span><router-link to="/newmiao">新喵教程</router-link></span>
      <span>明星喵</span>
      <span>喵喵来玩</span>
      <span>铲屎官聊</span>
    </div>
  </div>
</template>

<script>
  import Axios from "axios"
export default {
  name: 'list',
    data () {
      return {

      }
  },
  mounted:function() {

    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  .list{
    display: flex;
    margin-top: 0.1rem;
    height: 1rem;
    margin-bottom: 0.2rem;
    background: #eeeeee;
  }
  .list span{
    /*flex: 1;*/
    display: inline-block;
    line-height: 1rem;
    font-size: 0.3rem;
    margin: 0 auto;

  }
</style>
