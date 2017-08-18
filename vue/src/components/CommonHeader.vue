<template>
  <div class="header">
    <div class="commonheader">
      <span class="search">搜索
        <input type="text" placeholder="搜索文章或标题"/>
      </span>
      <router-link to="/message">
        <span class="message">MES</span>
      </router-link>
    </div>
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
  .header{
    height: 1rem;
    position: fixed;
    top: 0;
    width: 100%;
    background: #fff;
    z-index: 10;
  }
  .commonheader{
    position: relative;
    font-size: 0.3rem;
    display: flex;
    line-height: 1rem;
  }
  .commonheader .search input::-webkit-input-placeholder{
    color: #aaaaaa;
    font-size: 0.25rem;
    /*padding: 0.3rem;*/
  }
  .commonheader .search input{
    caret-color: #FA4634;
    background: #E6E6E6;
    outline: none;
    height: 0.6rem;
    border-radius: 0.4rem;
    padding: 0 0.3rem;
    border: 0.03rem solid #E6E6E6;
  }
  .commonheader .search{
    position: absolute;
    flex: 5;
    left: 0;
    height: 1rem;
    width: 5.4rem;
    /*width: 1rem;*/
  }
  .commonheader .message{
    position: absolute;
    flex: 1;
    width: 0.8rem;
    padding: 0 0.1rem;
    right: 0;
    height: 1rem;
    margin: 0 auto;
    /*width: 1rem;*/
  }
  .commonheader a{
    color: #000;
  }

</style>
