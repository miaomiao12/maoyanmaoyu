<template>

  <div class="trend-list">
    <ul>
      <li><router-link to="/trend/article">喵喵文</router-link></li>
      <li><router-link to="/trend/video">喵喵视频</router-link></li>
      <li><router-link to="/trend/help">helphelp喵喵</router-link></li>
    </ul>
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
  mounted:function() {
      Axios.get(this.url)
      .then((res)=>{
          this.users = res.data;
          console.log(res.data);
       });
    }
}
  console.log('kkkk');
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  .trend-list ul li a{
    color: #ffffff;
  }
  .trend-list ul li{
    flex: 1;
    text-align: center;
    font-size: 0.3rem;
    /*display: ;*/
  }
  .trend-list ul{
    display: flex;
    height: 1rem;
    background: #723377;
  }
</style>
