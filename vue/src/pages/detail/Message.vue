<template>
  <div class="detail-article">
    <article-header>消息中心</article-header>
    <div class="zhanwei" ></div>
    <div class="mes-list">
      <ul>
        <li>已读消息</li>
        <li>未读消息</li>
      </ul>
    </div>
    <hr/>
  </div>
</template>

<script>
  import ArticleHeader from '../trend/ArticleHeader'
  import "../../assets/js/jquery-1.12.4.min.js";
  import Axios from "axios"
export default {
  name: 'hello',
    data () {
      return {
      detail:"",
        comment:'',
        addcomment:''
      }
  },
  components:{
    ArticleHeader
  },
  mounted:function() {
    if(!sessionStorage.getItem('u_id')){
      alert("喵喵！还没登陆");
      this.$router.push("/login");
    }else{
      console.log("fuck");
    }
    },
  methods:{
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
  .mes-list{
    margin-top: 0.1rem;
  }
  .mes-list li{
    height: 1rem;
    line-height: 1rem;
    margin: 0 0.3rem 0.1rem 0.3rem;
    font-size: 0.3rem;
    border: 0.02rem solid lightslategrey;
    padding-left: 0.2rem;
  }
</style>
