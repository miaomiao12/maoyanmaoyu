<template>
  <div class="home">
    <common-header></common-header>
    <index-tui-song></index-tui-song>
    <index-list></index-list>
    <index-zhuan-ti></index-zhuan-ti>
    <index-hot-article></index-hot-article>
    <common-footer></common-footer>
  </div>
</template>

<script>
  import CommonFooter from '../../components/CommonFooter'
  import CommonHeader from '../../components/CommonHeader'
  import IndexTuiSong from './IndexTuiSong'
  import IndexZhuanTi from './IndexZhuanTi'
  import IndexHotArticle from './IndexHotArticle'
  import IndexList from './IndexList'
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
      CommonFooter,
      CommonHeader,
      IndexTuiSong,
      IndexList,
      IndexZhuanTi,
      IndexHotArticle
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

</style>
