import Vue from 'vue'
import Router from 'vue-router'
import Login from  '@/pages/Login'
import Reg from  '@/pages/Reg'
import Index from '@/pages/Index'
import Trend from '@/pages/trend/Trend'
import TrendArticle from '@/pages/trend/TrendArticle'
import TrendVideo from '@/pages/trend/TrendVideo'
import TrendHelp from '@/pages/trend/TrendHelp'
import NewArticle from '@/pages/trend/NewArticle'
import HotArticle from '@/pages/trend/HotArticle'
import Talent from '@/pages/talent/Talent'
import TalentInfo from '@/pages/talent/TalentInfo'
import DetailArticle from '@/pages/detail/DetailArticle'
import Message from '@/pages/detail/Message'
import MyPage from '@/pages/mypage/MyPage'
import IndexNewmiao from '@/pages/index/indexNewmiao'
import AddCatalog from  '@/pages/index/AddCatalog'
import Action from '@/pages/action/Action'
import ActionPhoto from '@/pages/action/ActionPhoto'
import ActionVideo from '@/pages/action/ActionVideo'
import ActionQuestion from '@/pages/action/ActionQuestion'
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/login',
      component: Login
    },
    {
      path: '/reg',
      component: Reg
    },
    {
      path:'/',
      redirect: '/index'
    },
    {
      path: '/index',
      component: Index
    },
    {
      path:'/trend/article',
      redirect:'/trend/article/new'
    },
    {
      path:'/trend/article',
      component:TrendArticle,
      children:[
        { path: "/trend/article/new", component: NewArticle },
        { path: "/trend/article/hot", component: HotArticle }
      ]
    },
    {
      path:'/trend/video',
      redirect:'/trend/video/new'
    },
    {
      path:'/trend/video',
      component:TrendVideo,
      children:[
        { path: "/trend/video/new", component: NewArticle },
        { path: "/trend/video/hot", component: HotArticle }
      ]
    },
    {
      path:'/trend/help',
      redirect:'/trend/help/new'
    },
    {
      path:'/trend/help',
      component:TrendHelp,
      children:[
        { path: "/trend/help/new", component: NewArticle },
        { path: "/trend/help/hot", component: HotArticle }
      ]
    },
    {
      path: '/trend',
      redirect:"/trend/new"
    },
    {
      path: '/trend',
      component: Trend,
      children: [
        { path: "/trend/new", component: NewArticle },
        { path: "/trend/hot", component: HotArticle }
      ]
    },
    {
      path:'/talent',
      component:Talent
    },
    {
      path:'/detail-article/:id',
      component:DetailArticle
    },
    {
      path: '/my-page',
      component: MyPage
    },
    {
      path: '/newmiao',
      component: IndexNewmiao
    },
    {
      path:'/talent-info/:uid',
      component:TalentInfo
    },
    {
      path: '/addcatalog',
      component: AddCatalog
    },
    {
      path: '/action',
      component: Action
    },
    {
      path: "/action/actionphoto",
      component: ActionPhoto
    },
    {
      path: "/action/actionvideo",
      component: ActionVideo
    },
    {
      path: "/action/actionquestion",
      component: ActionQuestion
    },
    {
      path:'/message',
      component:Message
    }
  ],
  mode: 'history'
})
