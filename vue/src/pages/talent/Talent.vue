<template>
  <div class="article">
    <article-header>达人秀</article-header>
    <div class="zhanwei"></div>
    <ul class="talent-person">
      <li v-for="once in alltalent">
        <div class="head">
          <img :src="once.head_img" alt=""/>
        </div>
        <div class="info">
          <span class="name">姓名：{{once.u_name}}</span>
          <span class="sex">性别：{{once.sex}}</span>
          <div class="count">动态数量：还没统计</div>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
  import ArticleHeader from '../trend/ArticleHeader'
  import Axios from "axios"
export default {
  name: 'hello',
    data () {
      return {
        alltalent:''
      }
  },
  components:{
    ArticleHeader,
  },
  mounted:function() {
    Axios.get('http://localhost:3000/all_talent').then((res)=>{
      this.alltalent=JSON.parse(res.data);
      console.log(this.alltalent);
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
  .talent-person li{
    font-size: 0.25rem;
    height: 1.5rem;
    position: relative;
  }
  .head{
    position: absolute;
    left: 0.2rem;
    top: 0.2rem;
    height: 1.2rem;
    width: 1.2rem;
  }
  .head img {
    height: 100%;
    width: 100%;
  }
  .info{
    /*margin-top: 0.2rem;*/
    position: absolute;
    left: 1.6rem;
    top: 0.3rem;
  }
</style>
