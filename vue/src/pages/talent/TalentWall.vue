<template>
  <div class="talent">
    <div class="talent-wall">
      <h3>| 达人墙
          <span class="more-talent">
            <router-link to="/talent">&gt</router-link>
          </span>
      </h3>
      <div class="daren">
      <ul >
        <li class="each-daren" v-for="talent in talentwall">
          <router-link :to="'/talent-info/'+talent.u_id">
              <div class="touxiang">
                  <img :src="talent.head_img" alt=""/>
              </div>
              <div class="daren-name">{{talent.u_name}}</div>
            </router-link>
        </li>
      </ul>
      </div>
    </div>

  </div>
</template>

<script>
  import Axios from "axios"
export default {
  name: 'hello',
    data () {
      return {
        talentwall:'',
        url:'http://localhost:3000/talentwall'
      }
  },
  mounted:function() {
    Axios.get(this.url).then((res)=>{
      this.talentwall=JSON.parse(res.data);
      console.log(this.talentwall);
    });
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  .talent-wall ul{
    display: flex;
    height: 1rem;
    background: #723377;
  }
  .talent-wall h3{
    font-size: 0.3rem;
    text-align: left;
    margin-left: 0.1rem;
  }
  .talent-wall{
    /*height: 1.5rem;*/
    margin-top: 0.2rem;
    position: relative;
  }
  .talent-wall ul li{
    flex: 1;
    /*height: 1.3rem;*/
  }
  .more-talent{
    font-weight: bold;
    font-size: 0.4rem;
    display: inline-block;
    margin-top: -0.1rem;
    position: absolute;
    right: 0.1rem;
  }
  .daren li{
    font-size: 0.2rem;
    text-align: center;
    line-height: 1.3rem;
  }
  .each-daren{
    position: relative;
    /*margin: 0 0.8rem;*/
    text-align: center;
  }
  .touxiang{
    height: 0.8rem;
    width: 0.8rem;
    background: #000;
    position: absolute;
    top: 0rem;
    border-radius: 1rem;
    overflow: hidden;
    left: 0.6rem;
  }
  .touxiang img{
    width: 100%;
    height: 100%;
  }
  .daren-name{
    position: absolute;
    top: 0.2rem;
    left: 0.6rem;

  }
</style>
