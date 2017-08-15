<template>
<div id="div1">
<!-- <h1>仅用来提交分类</h1> -->
  <div id="div2">仅用来提交分类</div>
  <input id="input" type="text" name="addfenlei" placeholder="  这是一个输入框 请输入分类名" v-model="catalogname">
  <button  id="button" @click="click">提交</button>
</div>

</template>

<script>
  import Axios from "axios"
  import jQuery from "../../assets/js/jquery-1.12.4.min.js"

export default {
    data () {
      return {
        catalogname:""
      }
  },
  methods:{
      click:function(){
        var _this=this;
        Axios.get("http://localhost:3000/addcatalogname",{
          params:{
            cname:this.catalogname
          }
        }).then((res)=>{

        })
      },
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";

input{
  border:none;
  outline:medium;
}
#div1{
  width: 100%;
  height: 3rem;
  background: #ff9999;
}
#div2{
  width: 100%;
  height: 1rem;
  font-size: 0.6rem;
}
#input{
  width: 100%;
  height: 1rem;
  margin-top: 0.5rem;
  font-size: 0.3rem;

}
#button{
  width: 100%;
  height: 1rem;
  font-size: 0.5rem;
  background: #ff9999;

}
</style>
