<template>
  <div class="detail-article">
    <article-header>消息中心</article-header>
    <div class="zhanwei" ></div>
    <div class="mes-list">
      <ul>
        <!--<router-link to="/comment-list/check">-->
          <li id="check" @click="show">已读消息--------------------------------
          <span class="yidu" v-for="mm in check">{{mm.shuliang}}</span></li>
        <!--</router-link>-->
        <!--<router-link to="/comment-list/uncheck">-->
          <li id="uncheck" @click="showuncheck">未读消息--------------------------------
          <span class="weidu" v-for="ww in uncheck">{{ww.shuliang}}</span></li>
        <!--</router-link>-->
      </ul>
    </div>
    <hr/>
    <div id="mes-box">
      <ul>
        <li v-for="mes in checkcomment"  class="check-mes">
          <p>{{mes.c_content}}</p>
          <!--<p>{{mes.c_content}}</p>-->
        </li>
        <li v-for="mess in uncheckcomment" class="uncheck-mes">
          <p>{{mess.c_content}}</p>
          <p>---{{mess.u_nickname}}</p>
          <input type="text" :value="mess.c_id" hidden/>
          <span class="dj-yidu caozuo">已读√</span>
          <span class="dj-del caozuo" :value="mess.c_id" @click="deletecom">删除</span>
        </li>
      </ul>
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
      check:'',
        uncheck:'',
        check_count:'',
        uncheck_count:'',
        checkcomment:'',
        uncheckcomment:''
      }
  },
  components:{
    ArticleHeader
  },
  mounted:function() {
    if(!sessionStorage.getItem('u_id')){
      alert("喵喵！还没登陆");
      this.$router.push("/login");
    }else {
      var uid = sessionStorage.getItem('u_id');
      console.log(uid);
      Axios.get('http://localhost:3000/uncheck_comment',{
      params:{
        u_id:uid
      }
    }).then((res)=>{this.uncheck=JSON.parse(res.data);});
//      console.log(this.uncheck);
      Axios.get('http://localhost:3000/check_comment',{
        params:{
          u_id:uid
        }
      }).then((res)=>{this.check=JSON.parse(res.data);});
//      console.log(this.check);
  }
  },
    methods:{
      show:function(){
        var uid = sessionStorage.getItem('u_id');
        $('.uncheck-mes').css('display','none');
        $('.check-mes').css('display','block');
        Axios.get('http://localhost:3000/show_check',{
          params:{
            u_id:uid
          }
        }).then((res)=>{
          this.checkcomment=JSON.parse(res.data);
          console.log(this.checkcomment);
        });
      },
      showuncheck:function(){
        var uid = sessionStorage.getItem('u_id');
        $('.check-mes').css('display','none');
        $('.uncheck-mes').css('display','block');
        Axios.get('http://localhost:3000/show_uncheck',{
          params:{
            u_id:uid
          }
        }).then((res)=>{
          this.uncheckcomment=JSON.parse(res.data);
          console.log(this.uncheckcomment);
        });
      },
      deletecom:function(){
//        var tid=$(this).siblings('input').attr("value");
        var tid=$(this).html();
        console.log(tid);
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
  .mes-list{
    margin-top: 0.1rem;
  }
  .mes-list li:hover{
    /*cursor: pointer;*/
  }
  .mes-list li{
    height: 1rem;
    line-height: 1rem;
    margin: 0 0.3rem 0.1rem 0.3rem;
    font-size: 0.3rem;
    border: 0.02rem solid lightslategrey;
    padding-left: 0.2rem;
  }
  .mes-list a{
    color: #000000;
  }
  #mes-box ul{
    margin-top: 0.2rem;
  }
  #mes-box li{
    height: 0.8rem;
    border: 0.03rem solid #AAAAAA;
    margin-bottom: 0.1rem;
    font-size: 0.25rem;
  }
  #uncheck{
    color: #880000;
  }
  .uncheck-mes p{
    color: #ac2925;
  }
  .caozuo{
    padding: 0.1rem;
    background: #08BECE;
    margin-left: 0.2rem;
    position: absolute;
  }
  .dj-yidu{
    right: 0.3rem;
    top: 0.1rem;
  }
  .dj-del{
    right: 1.5rem;
    top: 0.1rem;
  }
  #mes-box li{
    /*float: right;*/
    position: relative;
  }

</style>
