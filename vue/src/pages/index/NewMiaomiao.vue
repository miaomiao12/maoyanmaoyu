<template>
  <div  class="newMiao">
     <ul class="hot-article">
        <li v-for="wz in article">
          <router-link :to="'/detail-article/'+wz.t_id">

          <div class="title"><div class="zuo"> {{wz.t_title}}</div></div>
          <div class="content"><div class="test" > {{wz.t_content}}</div></div>
          <div class="author"><div class="">发布者：{{wz.t_sender}}</div></div>

          </router-link>
        </li>
      </ul>
  </div>

</template>

<script>
  import Axios from "axios"
export default {
    data () {
      return {
        article:""
      }
  },
  mounted:function() {
      Axios.get('http://localhost:3000/shownewmiao').then((res)=>{
        this.article=JSON.parse(res.data);
    });
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";

  .newMiao{
    margin-top: 1.2rem;
    width: 100%;

  }
  .hot-article li{
    height: 2rem;
    background: #ff9999;
    margin-left: 0.2rem;
    margin-right: 0.2rem;
    margin-bottom: 0.2rem;

  }
  .title{
    height: 0.8rem;
    color: #ffffff;
    line-height: 0.8rem;
    margin-left: 0.5rem;
    font-size: 0.4rem;
  }
  .content{
    overflow: hidden;
    font-size: 0.3rem;
    height: 0.8rem;
    line-height: 0.8rem;

    color: #ffffff;
    margin-left: 0.5rem;
  }
  .author{
    height: 0.4rem;
    line-height: 0.4rem;
    font-size: 0.25rem;
    color: #ffffff;
  }
  /*.zuo{*/
    /*float: left;*/
  /*}*/
  .test{
    text-overflow:ellipsis;
    overflow:hidden;
    white-space:nowrap;
  }

</style>
