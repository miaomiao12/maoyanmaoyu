<template>
  <div class="index-hot-article">
      <ul class="hot-article">
        <li v-for="wz in article">
          <router-link :to="'/detail-article/'+wz.t_id">
            <div class="article">
              <div class="hot-article-main">
                <div class="title">
                 {{wz.t_title}}
                </div>
                <div class="content">
                  {{wz.t_content}}
                </div>
              </div>
              <div class="article-img">
                <img :src="wz.t_img" alt=''/>
              </div>
            </div>
          <div class="author">
            {{wz.t_sender}}
          </div>
        </router-link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
  import Axios from "axios"
export default {
  name: 'lunbo',
    data () {
      return {
        article:''
      }
  },
  mounted:function() {
    Axios.get('http://localhost:3000/new_article').then((res)=>{
      this.article=JSON.parse(res.data);
//      console.log(this.article);
    });
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  .index-hot-article{
    margin-bottom: 1.1rem;
  }
  .hot-article{
    margin-top: 0.2rem;
    background: #aaE793;
    /*width: 6rem;*/
    /*height: 6rem;*/
  }
  .hot-article li{
    height: 3.1rem;
    background: #00d6b2;
    margin-bottom: 0.1rem;
  }
  .article{
    /*display: flex;*/
  }
  .hot-article-main{
    float: left;
    width: 3.8rem;

  }
  .article-img{
    width: 2.2rem;
    height: 2.2rem;
    margin: 0.3rem 0.2rem 0.1rem 0.2rem;
    float: right;
    background: #AAAAAA;
  }
  .article-img img{
    width: 100%;
    height: 100%;
  }
  .title{
    height: 0.8rem;
    color: #ffffff;
    line-height: 0.4rem;
    font-size: 0.26rem;
    margin-top: 0.2rem;
    padding: 0 0.25rem;
  }
  .content{
    text-overflow:ellipsis;
    overflow: hidden;
    font-size: 0.22rem;
    height: 1.5rem;
    padding: 0 0.2rem;
  }
  .author{
    height: 0.4rem;
    line-height: 0.4rem;
    font-size: 0.25rem;
    padding-left: 0.3rem;
    color: #effccc;
  }

</style>
