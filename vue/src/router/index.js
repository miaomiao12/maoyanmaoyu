import Vue from 'vue'
import Router from 'vue-router'
import Mint from 'mint-ui'
import FooterTabs from '@/components/FooterTabs'
import MyPage from '@/page/MyPage'
Vue.use(Router)
Vue.use(Mint)


export default new Router({
  routes: [
    {
      path: '/',
      component: FooterTabs
    },
    {
      path: '/mine',
      component:MyPage
    }
  ]
})
