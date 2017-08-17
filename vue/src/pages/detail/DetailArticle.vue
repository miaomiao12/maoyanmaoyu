<template>
  <div class="detail-article">
    <div>slkjsdlka</div>
    <div v-for="details in detail">
    <article-header>喵文详情</article-header>
    <div class="zhanwei" ></div>
      <h2> {{details.t_title}}</h2>
      <p>
        {{details.t_content}}
      </p>
      <div class="pic-group">
        <div class="pic">
          <img :src="details.t_img" alt=""/>
        </div>
        <div class="pic">
          <img :src="details.t_img" alt=""/>
        </div>
        <div class="pic">
          <img :src="details.t_img" alt=""/>
        </div>
        <div class="pic">
        <img :src="details.t_img" alt=""/>
      </div>

      </div>
      <div class="author">
        <h2>
        作者：{{details.t_sender}}
        </h2>
       <span class="dj">访问量：{{details.t_dj}}</span>
      </div>
      <div class="comment">
        <textarea class="ipt-comment" id="com-val"></textarea>
        <span class="sub-com" @click="add_comment">评论</span>
      </div>
      <div class="com-list">
        <ul>
          <li v-for="pl in comment">
            <div class="each-comment">
              <p></p>
              <span>{{pl.c_user_id}}:~{{pl.c_content}}</span>
            </div>

          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
  import ArticleHeader from '../trend/ArticleHeader'
  import "../../assets/js/jquery-1.12.4.min.js";
  import Axios from "axios"
export default {
  name: 'hello',
    data () {
      return {
      detail:"",
        comment:'',
        addcomment:''
      }
  },
  components:{
    ArticleHeader
  },
  mounted:function() {
    var id=this.$route.params.id;
    Axios.get('http://localhost:3000/detail_article',{
      params:{
        t_id:id
      }
    }).then((res)=>{
      this.detail=JSON.parse(res.data);
      console.log(this.detail);
    });
    Axios.get('http://localhost:3000/allcomment',{
      params:{
        t_id:id
      }
    }).then((res)=>{
      this.comment=JSON.parse(res.data);
      console.log(this.comment);
    });
    },
  methods:{
    add_comment:function()
    {
      var tid=this.$route.params.id;
      var $content=$("#com-val").val();
      console.log('mmm');
      console.log($content);
      if(!$content){
        alert("请输入内容~")
      }else{
        Axios.get('http://localhost:3000/add_comment',{
          params:{
            t_id:tid,
            user_id:3,
            c_content:$content
          }
        }).then((res)=>{
          this.addcomment=JSON.parse(res.data);
            if(this.addcomment){

              location.reload(true);
            }else{
              alert("sorry,failed to add comment");
            }
        });
      }


    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  .zhanwei{
    height: 1.1rem;
    width: 100%;
  }
  h2{
    margin-left: 0.3rem;
  }
  p{
    font-size: 0.25rem;
    display: inline-block;
    width: 5.6rem;
    margin: 0.2rem;
  }
  .pic-group{
    width: 6rem;
    /*height: 5rem;*/
    margin: 0 auto;
  }
  .pic{
    width: 1.5rem;
    height: 1.5rem;
    padding-left: 0.4rem ;
    margin: 0.1rem 0;
    float: left;
  }
  .pic img{
    width: 100%;
    height: 100%;
  }
  .author{
    height: 1rem;
    width: 100%;
    font-size: 0.25rem;
    position: relative;
  }
  .author .dj{
    position: absolute;
    right: 0.1rem;
    top: 0.05rem;
  }
  .comment{
    /*margin: 0 10%;*/
    position: relative;
    margin-bottom: 0.2rem;
  }
  .ipt-comment{
    width: 80%;
    margin: 0 10%;
    height: 2rem;
    font-size: 0.27rem;
    overflow-y: scroll;
    border: 0.05rem solid #00d6b2;
    caret-color: #FA4634;
  }
  .sub-com{
    width: 0.6rem;
    height: 0.5rem;
    line-height: 0.5rem;
    font-size: 0.3rem;
    background: #665;
    padding: 0 0.1rem;
    position: absolute;
    right: 10%;
  }
  .com-list{
    margin-top: 0.5rem;
  }
  .com-list li{
    font-size: 0.25rem;
  }
  .each-comment{
    position: relative;
  }
  .each-comment span{
    position: absolute;
    left: 0.5rem;
  }
</style>
