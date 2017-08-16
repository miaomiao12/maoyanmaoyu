<template>
  <div class="hello">
    <common-header></common-header>
      <div class="hot-topic">
        <h2>| 热门话题</h2>
        <ul>
          <li>话题1</li>
          <li>话题1</li>
          <li>话题1</li>
        </ul>
      </div>

    <talent-wall></talent-wall>
      <trend-list></trend-list>
    <hot-new></hot-new>
    <router-view></router-view>
    <!--<index-hot-article></index-hot-article>-->
    <common-footer></common-footer>
  </div>
</template>

<script>
  import CommonFooter from '../../components/CommonFooter'
  import CommonHeader from '../../components/CommonHeader'
  import IndexHotArticle from '../index/IndexHotArticle'
  import HotNew from './HotNew'
  import TrendList from './TrendList'
  import TalentWall from '../talent/TalentWall'
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
      IndexHotArticle,
      HotNew,
      TrendList,
      TalentWall
  }, 
  mounted:function() {

    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";


  .hot-topic{
    margin-top: 1.1rem;
    height: 1.6rem;
    background: #888888;
  }
  .hot-topic h2{
    text-align: left;
    font-size: 0.25rem;
    margin-left: 0.1rem;
  }

  .hot-topic ul{
    display: flex;
    /*height: 1.3rem;*/
  }
  .hot-topic ul li{
    line-height: 1.3rem;
    flex: 1;
  }
  .daren li{
    font-size: 0.2rem;
    text-align: center;
    line-height: 1.3rem;
  }
  .each-daren{
    position: relative;
  }
  .touxiang{
    height: 0.8rem;
    width: 0.8rem;
    background: #000;
    position: absolute;
    top: 0rem;
    border-radius: 0.5rem;
    overflow: hidden;
  }
  .touxiang img{
    width: 100%;
    height: 100%;
  }
  .daren-name{
    position: absolute;
    top: 0.2rem;
  }
</style>
