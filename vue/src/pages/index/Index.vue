<template>
  <div class="hello">
    <common-header></common-header>
    <index-tui-song></index-tui-song>
    <index-list></index-list>
    <index-zhuan-ti></index-zhuan-ti>
    <index-hot-article></index-hot-article>
    <common-footer></common-footer>
  </div>
</template>

<script>
  import CommonFooter from '../common/CommonFooter'
  import CommonHeader from '../common/CommonHeader'
  import IndexTuiSong from '../index/IndexTuiSong'
  import IndexZhuanTi from '../index/IndexZhuanTi'
  import IndexHotArticle from '../index/IndexHotArticle'
  import IndexList from '../index/IndexList'
  import Axios from "axios"
export default {
  name: 'hello',
    data () {
      return {
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

    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";

</style>
