<template>
 <div class="hot-new">
   <ul>
     <li class="select" id="new" @click="changenew">
       <slot name="new"><router-link to="/trend/new">最新</router-link></slot>
     </li>
     <li>|</li>
     <li id="hot" @click="changehot">
       <slot name="hot"><router-link to="/trend/hot">最热24小时</router-link></slot>
     </li>
   </ul>
 </div>
</template>

<script>
  import "../../assets/js/jquery-1.12.4.min.js";
  import Axios from "axios"
export default {
  name: 'hot-new',
    data () {
      return {

      }
  },
  mounted:function() {

    },
  methods:{
    changehot:function()
    {
        $("#hot").addClass("select");
        $("#new").removeClass("select");
//        $("#new").removeClass("select");
    },
    changenew:function()
    {
        $("#new").addClass("select");
        $("#hot").removeClass("select");
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  .hot-new{
    width: 2.4rem;
    margin-top: 0.1rem;
    font-size: 0.18rem;
    height: 0.3rem;
    margin-bottom: -0.1rem;
  }
  .hot-new ul{
    display: flex;
  }
  .hot-new ul li{
    margin: 0 auto;
    text-align: center;
  }
  .select{
    border-bottom: 0.02rem solid #08BECE;
  }

</style>
