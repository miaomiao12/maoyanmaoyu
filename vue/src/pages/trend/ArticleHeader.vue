<template>
  <div class="header">
    <div class="articleheader">
      <span class="back">
        <router-link to="/trend">&lt</router-link>
      </span>
      <span class="category">
        <h2><slot>文章类型</slot></h2>
      </span>
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
  components:{

  },
  mounted:function() {
      Axios.get(this.url)
      .then((res)=>{
          this.users = res.data;
          console.log(res.data);
       });
    },
  methods:{

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  .header{
    height: 1rem;
    position: fixed;
    top: 0;
    width: 100%;
    background: #444444;
    color: #ffffff;
  }
 .back{
   font-size: 0.6rem;
   float: left;
   width: 1rem;
   margin-left: 0.2rem;
   line-height: 1rem;
 }
  .category{
    /*text-align: center;*/
    line-height: 1rem;
    position: absolute;
    left: 2.6rem;
    /*width: 1rem;*/
    /*margin-left: -0.8rem;*/
  }
</style>
