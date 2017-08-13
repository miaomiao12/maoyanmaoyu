<template>
<div id="indexNewmiao">
    <common-header></common-header>
<!--       <ul class="newmiao">
        <li v-for="hot in hot_article">
            <div class="article">
              <div class="hot-article-main">
                <div class="title">
                  {{hot.t_title}}
                </div>
                <div class="content">
                  {{hot.t_content}}
                </div>
              </div>
              <div class="article-img">
                <img :src="hot.t_img" alt=""/>
              </div>
            </div>
          <div style="clear: both"></div>
          <div class="author">
            主子：{{hot.t_sender}}
            <span class="dj">
              点击量：{{hot.t_dj}}
            </span>
          </div>
        </li>
      </ul> -->
    <common-footer></common-footer>
</div>

</template>

<script>
  import CommonFooter from '../../components/CommonFooter'
  import CommonHeader from '../../components/CommonHeader'
  import Axios from "axios"
export default {
  name: 'hello',
    data () {
      return {
        title:"",
        content:""
      }
  },
  components:{
    CommonFooter,
    CommonHeader,
  },
  mounted:function() {

  },
  methods:{
    ceshi:function(){
      Axios.get("http://localhost:3000/chuanjiawenzhang",{
          params:{

          }
        }).then((res)=>{
          
        })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
    .input{

    width: 98%;
    height: 1rem;
    margin-top: 1rem;
    font-size: 0.3rem;
    line-height:1rem;
    border:10px solid block;

  }

</style>
