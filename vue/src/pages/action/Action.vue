<template>
  <div id="action">
      <common-header></common-header>
      <div class="issue-logo"></div>
      <div class="issue-kind">
          <div><router-link to="/action/actionphoto">发图文</router-link></div>
          <div><router-link to="/action/actionvideo">发视频</router-link></div>
          <div><router-link to="/action/actionquestion">提问题</router-link></div>
      </div>
      <common-footer></common-footer>
  </div>
</template>
<script>
  import CommonHeader from '../../components/CommonHeader'
  import CommonFooter from '../../components/CommonFooter'
  export default {
    data(){
      return{

      }
    },
    components:{
      CommonHeader,
      CommonFooter
    },
    methods:{

    }
  }
</script>
<style scoped>
  @import "../../assets/css/reset.css";
  #action{
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: block;
  }
  .issue-close{
    width: 1rem;
    height: 1rem;
    position: absolute;
    right: 0;
    background-size: 100%;
    background-image: url(../../assets/img/close.png);
  }
  .issue-logo{
    width: 100%;
    height: 2rem;
    margin-top: 2rem;
    background-size: 100%;
    background-image: url("../../assets/img/issue-logo.png");
  }
  .issue-kind{
    margin-top: 1.5rem;
    font-size: 0.5rem;
    display: flex;
  }
  .issue-kind div{
    flex: 1;
    text-align: center;
    border-radius: 30px;
  }
  .issue-kind div a{
    color: #000;
  }
  .issue{
    width: 100%;
    height: 1rem;
    position: fixed;
    bottom: 0;
  }
  .issue-btn{
    width: 1rem;
    height: 1rem;
    margin: 0 auto;
    background-size: 100%;
    background-image: url("../../assets/img/issue.png");
    background-repeat: no-repeat;
    /*background: url("../../assets/img/issue.png") no-repeat;*/
    background-position: center;
  }
</style>
