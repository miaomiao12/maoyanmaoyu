<template>
  <div class="footer">
    <ul class="commonfooter">
      <li><router-link to="/index">首页</router-link></li>
      <li><router-link to="/trend">喵区</router-link></li>
      <li><router-link to="">搞事</router-link></li>
      <li><router-link to="">喵商城</router-link></li>
      <li><router-link to="">铲屎官</router-link></li>
    </ul>
  </div>
</template>

<script>
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
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../assets/css/reset.css";
  .footer{
    height: 1rem;
    position: fixed;
    bottom:0;
    width: 100%;
    background: #F9CC9D;
  }
  .commonfooter{
    display: flex;
  }
  .commonfooter li{
    flex: 1;
    height: 1rem;
    line-height: 1rem;
    display:inline-block;
    font-size: 0.3rem;
    text-align: center;
  }
  .commonfooter li a{
    color: #317EF9;
  }
</style>
