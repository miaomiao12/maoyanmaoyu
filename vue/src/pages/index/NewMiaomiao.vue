<template>
  <div  class="newMiao">
     <ul class="hot-article">
        <li>
          <div class="article">
              <div class="hot-article-main">
                  <div class="title">
                    文章标题
                  </div>
                  <div class="content">
                    文章内容
                  </div>
              </div>
          </div>
          <div class="author">作者</div>
        </li>
      </ul>
    </div>
  </div>
  <!-- <input type="text" name="addfenlei"> -->
</template>

<script>
  import Axios from "axios"
export default {
    data () {
      return {
        article:""
      }
  },
  mounted:function() {
      Axios.get('http://localhost:3000/shownewmiao').then((res)=>{
      this.article=JSON.parse(res.data);
    });
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";

  .newMiao{
    margin-top: 1.2rem;

  }
  .hot-article{
    /*margin-top: 0.2rem;*/
    background: #aaE793;
  }
  .hot-article li{
    height: 3.1rem;
    background: #ff9999;
    /*margin-bottom: 0.1rem;*/
  }
  .hot-article-main{
    width: 100%;

  }
  .article-img{
    width: 2.2rem;
    height: 2.2rem;
    margin: 0.3rem 0.2rem 0.1rem 0.2rem;
    float: right;
    background: #AAAAAA;
    /*margin: auto;*/
  }
  .article-img img{
    width: 100%;
    height: 100%;
  }
  .title{
    height: 0.8rem;
    color: #ffffff;
    line-height: 0.8rem;
    font-size: 0.26rem;
    /*margin-top: 0.2rem;*/
    /*padding: 0 0.25rem;*/
  }
  .content{
    /*text-overflow:ellipsis;*/
    overflow: hidden;
    font-size: 0.22rem;
    height: 1.5rem;
    /*padding: 0 0.2rem;*/
    color: #ffffff;
  }
  .author{
    height: 0.4rem;
    line-height: 0.4rem;
    font-size: 0.25rem;
    /*padding-left: 0.3rem;*/
    color: #ffffff;
  }
  

</style>
