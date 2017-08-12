<template>
  <div class="article">
    <article-header>喵喵视频</article-header>
    <div class="zhanwei"></div>
    <hot-new>
      <div slot="new"><router-link to="/trend/video/new">最新</router-link></div>
      <div slot="hot"><router-link to="/trend/video/hot">最热24小时</router-link></div>
    </hot-new>
    <router-view></router-view>
  </div>
</template>

<script>
  import ArticleHeader from './ArticleHeader'
  import HotNew from './HotNew'
  import Axios from "axios"
export default {
  name: 'hello',
    data () {
      return {
      }
  },
  components:{
    ArticleHeader,
      HotNew
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
