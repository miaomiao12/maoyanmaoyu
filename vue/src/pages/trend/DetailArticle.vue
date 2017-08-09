<template>
  <div class="detail-article">
    <article-header>喵文详情</article-header>
    <div class="zhanwei"></div>
      <h2> Title</h2>
      <p>
        Add "scoped" attribute to limit CSS to this component only
        Add "scoped" attribute to limit CSS to this component only
        Add "scoped" attribute to limit CSS to this component only
        Add "scoped" attribute to limit CSS to this component only
        Add "scoped" attribute to limit CSS to this component only
      </p>
  </div>
</template>

<script>
  import ArticleHeader from './ArticleHeader'
  import Axios from "axios"
export default {
  name: 'hello',
    data () {
      return {
        users:[],
        url:'http://localhost:3000/user'
      }
  },
  components:{
    ArticleHeader
  },
  mounted:function() {
      Axios.get(this.url)
      .then((res)=>{
          this.users = res.data;
          console.log(res.data);
       });
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
  p{
    font-size: 0.25rem;
  }
</style>
