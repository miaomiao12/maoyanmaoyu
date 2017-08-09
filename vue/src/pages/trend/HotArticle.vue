<template>
  <div class="index-hot-article">
      <ul class="hot-article">
        <li>
            <div class="article">
              <div class="hot-article-main">
                <div class="title">
                  我是热吻热文文章的标题，标题不同拜托拜托摆脱
                </div>
                <div class="content">
                  微软推哦怕看美女不过方法啊可能是八嘎亚
                  微软推哦怕看美女不过方法啊可能是八嘎亚
                  微软推哦怕看美女不过方法啊可能是八嘎亚
                  微软推哦怕看美女不过方法啊可能是八嘎亚
                </div>
              </div>
              <div class="article-img">
                <img src="" alt=""/>
              </div>
            </div>
          <div style="clear: both"></div>
          <div class="author">
            我是作者
          </div>
        </li>
        <li>222</li>
        <li>222</li>
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
    /*margin: auto;*/
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
