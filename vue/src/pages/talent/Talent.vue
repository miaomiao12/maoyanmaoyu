<template>
  <div class="article">
    <article-header>达人秀</article-header>
    <div class="zhanwei"></div>

  </div>
</template>

<script>
  import ArticleHeader from '../trend/ArticleHeader'
  import Axios from "axios"
export default {
  name: 'hello',
    data () {
      return {
      }
  },
  components:{
    ArticleHeader,
  },
  mounted:function() {
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  .zhanwei{
    height: 1.1rem;
    width: 100%;
  }
</style>
