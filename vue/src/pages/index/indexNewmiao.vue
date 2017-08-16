<template>
<div id="indexNewmiao">
  <common-header></common-header>
  <new-miaomiao></new-miaomiao>
  <common-footer></common-footer>
</div>

</template>

<script>
  import CommonFooter from '../../components/CommonFooter'
  import CommonHeader from '../../components/CommonHeader'
  import NewMiaomiao from './NewMiaomiao'

  import Axios from "axios"
export default {
  name: 'indexNewmiao',
    data () {
      return {
      }
  },
  components:{
    CommonFooter,
    CommonHeader,
    NewMiaomiao
  },
  mounted:function() {
  },
  methods:{
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  @import "../../assets/css/reset.css";
  

</style>
