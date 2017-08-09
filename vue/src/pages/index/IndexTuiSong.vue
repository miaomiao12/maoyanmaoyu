<template>
  <div class="index-lun-bo">
    <div class="lun-bo">
      后台推送
    </div>
  </div>
</template>

<script>
  import Axios from "axios"
export default {
  name: 'lunbo',
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
  @import "../../assets/css/reset.css";
  .index-lun-bo{
    margin-top: 1rem;
  }
  .lun-bo{
    margin-top: 0.1rem;
    background: #FFE793;
    height: 3rem;
  }
</style>
