<template>
  <div class="header">
    <div class="articleheader">
      <span class="back" @click="back">
        &lt
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

      }
  },
  components:{

  },
  mounted:function() {
    },
  methods:{
    back:function(){
//      if()
      history.go(-1);
    }
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
    z-index: 1;
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
