<template>
  <div class="question">
    <ul class="header">
      <router-link to="/action"><li class="left-btn">取消</li></router-link>
      <li>提问</li>
      <router-link to="/index"><li class="right-btn">发送</li></router-link>
    </ul>
    <div class="question-list">
      <label>选择宠物：</label>
      <select name="" id="" style="width: 100%;">
        <option value="">吸血喵</option>
        <option value="">少尉喵</option>
        <option value="">兽王喵</option>
        <option value="">刺客喵</option>
        <option value="">魔法喵</option>
        <option value="">机械喵</option>
      </select>
      <label>选择问题类型：</label>
      <select name="" id="" style="width: 100%;">
        <option value="">食欲问题</option>
        <option value="">感冒问题</option>
        <option value="">排泄问题</option>
      </select>
      <label>是否已经绝育：</label>
      <select name="" id="" style="width: 100%;">
        <option value="">否</option>
        <option value="">是</option>
      </select>
      <label>是否近期已驱虫：</label>
      <select name="" id="" style="width: 100%;">
        <option value="">否</option>
        <option value="">是</option>
      </select>
      <label>是否一年内注射疫苗：</label>
      <select name="" id="" style="width: 100%;">
        <option value="">否</option>
        <option value="">是</option>
      </select>
      <label>便便是否正常：</label>
      <select name="" id="" style="width: 100%;">
        <option value="">否</option>
        <option value="">是</option>
      </select>
      <label>食欲是否正常：</label>
      <select name="" id="" style="width: 100%;">
        <option value="">否</option>
        <option value="">是</option>
      </select>
      <label>问题描述：</label><br/>
      <input type="text" placeholder="输入文字" style="width: 100%;"/>
    </div>
  </div>
</template>
<script>
  export default {
    data(){
    return{

    }
  }
  }
</script>
<style scoped>
  @import "../../assets/css/reset.css";
  .question{
    font-size: 0.5rem;
  }
  .question-list{
    font-size: 0.35rem;
  }
  .header{
    height: 1rem;
    text-align: center;
    background: #ccc;
    display: flex;
  }
  .header a{
    color: #000;
  }
  .header li{
    flex: 1;
    float: left;
  }
  .header .left-btn{
    margin-left: 0.2rem;
  }
  .header .right-btn{
    margin-right: 0.2rem;
  }
</style>
