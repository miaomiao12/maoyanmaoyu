<template>
  <div class="index-lun-bo">
    <div class="lun-bo">

      <mt-swipe  :auto="4000">
          <mt-swipe-item>
              <img src="../../assets/img/miaomiao2.jpg">
          </mt-swipe-item>

          <mt-swipe-item>
              <img src="../../assets/img/miaomiao1.jpg">
          </mt-swipe-item>

          <mt-swipe-item>
              <img src="../../assets/img/miaomiao3.jpg">
          </mt-swipe-item>
      </mt-swipe>

    </div>
  </div>
</template>

<script>
  import Axios from "axios"
  import { Swipe, SwipeItem } from 'mint-ui';

export default {
  name: 'lunbo',
    data () {
      return {

      }
  },
  mounted:function() {

    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  .index-lun-bo{
    margin-top: 1rem;
  }
  .lun-bo{
    margin-top: 0.1rem;
    background: #FFE793;
    height: 4rem;
  }
</style>
