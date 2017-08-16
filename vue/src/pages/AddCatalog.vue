template>
<div id="div1">
    <input id="input" type="text" name="addfenlei" v-model="article">
  <button  id="button" @click="click">提交</button>
</div>

</template>

<script>
  import Axios from "axios"
  import jQuery from "../assets/js/jquery-1.12.4.min.js"

export default {
    data () {
      return {
        article:""
      }
  },
  mounted:function() {
    
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";

#input{
  width: 100%;
  height: 1rem;
}
#button{
  width: 100%;
  height: 1rem;
  background: #ff9999;
}
</style>
