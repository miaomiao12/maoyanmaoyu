<template>
  <div class="article">
    <article-header>达人信息</article-header>
    <div class="zhanwei"></div>
    <div class="info" v-for="info in talentinfo">
    <!--<div class="info">-->
        <div class="touxiang">
          <img :src="info.head_img" alt=""/>
          <!--<img src="#" alt=""/>-->
        </div>
        <div class="person-info">
          <!--{{info.u_name}}-->
          <ul class="geren-info">
            <li>姓名：{{info.u_name}}</li>
            <li>昵称：{{info.u_nickname}}</li>
            <li>性别：{{info.sex}}</li>
            <li>注册时间：{{info.reg_time}}</li>
          </ul>
        </div>
    </div>
    <div class="his-blog">
      <ul class="hot-article">
        <li v-for="his in histrend">
          <router-link to="">
            <div class="article">
              <div class="hot-article-main">
                <div class="title">
                  <h2>{{his.t_title}}</h2>
                </div>
                <div class="content">
                  <p>{{his.t_content}}</p>
                </div>
              </div>
              <div class="article-img">
                <img :src="his.t_img" alt=''/>
              </div>
            </div>
            <div class="author">
              <h2>
                作者：{{his.t_sender}}
              </h2>
            </div>
          </router-link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
  import ArticleHeader from '../trend/ArticleHeader'
  import Axios from "axios"
export default {
  name: 'hello',
    data () {
      return {
      talentinfo:"",
        histrend:""
      }
  },
  components:{
    ArticleHeader,
  },
  mounted:function() {
    var uid=this.$route.params.uid;
    console.log(uid);
    Axios.get('http://localhost:3000/talent-info',{
      params:{
        u_id:uid
      }
    }).then((res)=>{
      this.talentinfo=JSON.parse(res.data);
      console.log(this.talentinfo);
    });

    Axios.get('http://localhost:3000/his-trend',{
      params:{
        u_id:uid
      }
    }).then((res)=>{
      this.histrend=JSON.parse(res.data);
      console.log(this.histrend);
    });
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
  .info{
    position: relative;
    margin-bottom: 0.1rem;
  }
  .touxiang{
    height: 2.5rem;
    width: 2.5rem;
    background: #000;
    position: absolute;
    top: 0.3rem;
    border-radius: 2rem;
    overflow: hidden;
    left: 0.3rem;
  }
  .touxiang img{
    height: 100%;
    width: 100%;
  }
  .person-info{
    height: 3rem;
    width: 3rem;
    position: absolute;
    border: 0.05rem solid #e41;
    right: 0.2rem;
  }
  .geren-info{
    font-size: 0.3rem;
    text-align: left;
    margin-top: 0.2rem;
  }
  .geren-info li{
    margin-left: 0.3rem;
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
  .his-blog{
    margin-top: 4rem;
  }
</style>
