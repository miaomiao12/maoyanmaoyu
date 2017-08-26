<template>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>产品编号</th>
          <th>产品名字</th>
          <th>购买数量</th>
          <th>产品单价</th>
          <th>产品总价</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item , index) in message">
          <td @click="jia(index)">{{item.id}}</td>
          <td>{{item.name}}</td>
          <td>
            <button type="button" class="btn tn-primary" @click="subtract(index)">-</button>
            <input type="text" v-model="item.quantity">
            <button type="button" class="btn tn-primary" @click="add(index)">+</button>
          </td>
          <td>{{item.price | filtermoney}}</td>
          <!--<td>{{arr[index].one}}</td>-->
          <td>{{item.price*item.quantity | filtermoney}}</td>
          <td>
            <button type="button" class="btn btn-danger" @click="remove(index)">移除</button>
          </td>
        </tr>
        <tr>
        <td>总购买价
        </td>
        <td>
          {{animatenum | filtermoney}}
        </td>
        <td>总购买数量
        </td>
        <td>

        </td>
        <td colspan="2">
          <button type="button" class="btn btn-danger" @click="empty()">清空购物车</button>
        </td>
      </tr>
      </tbody>
    </table>
    <p v-if="message.length===0">您的购物车为空</p>
  </div>
</template>

<script>
    export default{
      data ()
    {
      return {
        message: [
          {
            id: 111,
            name: 'iphone7p',
            quantity: 3,
            price: 4000
          }, {
            id: 1340,
            name: 'iphone7',
            quantity: 9,
            price: 3000
          }, {
            id: 7758,
            name: 'imac',
            quantity: 4,
            price: 7000
          }, {
            id: 2017,
            name: 'ipad',
            quantity: 5,
            price: 6000
          }
        ]
      }
    },
      watch:{
        toComput2:function(newValue,oldValue){
          this.tween(newValue,oldValue);
        }
      },
      computed:{
        toComput2:function(){
          var vm=this;
          //每次进来要重置总金额
          vm.totalPrice=0;
          this.message.forEach(function(mess){
            vm.totalPrice+=parseInt(mess.price*mess.quantity);
          })
          return this.totalPrice;
        }
      },
      filters:{
        filtermoney:function(value){
          return '￥'+value ;
        },
        mounted:function() {
          this.tween('97000','0');
        },
        methods:{
          toComput:function(){
            var vm=this;
            //每次进来要重置总金额
            vm.totalPrice=0;
            this.message.forEach(function(mess){
              vm.totalPrice+=parseInt(mess.price*mess.quantity);
            })
            return this.totalPrice;
          },
          add:function(index){
            var vm = this;
            vm.message[index].quantity++;
          },
          subtract:function(index){
            var vm = this;
            vm.message[index].quantity--;
            if(vm.message[index].quantity<=0) {
              if (confirm("你确定移除该商品？")) {
                vm.message.splice(index,1)
              }
            }
          },
          remove:function(index){
            var vm = this;
            if (confirm("你确定移除此商品？")) {
              vm.message.splice(index,1);
            }
          },
          empty:function() {
            var vm = this;
            vm.message.splice(0,vm.message.length);
          },
          jia:function(index) {
            var vm = tihs;
            vm.arr[index].one++;
          },
          tween:function(newValue,oldValue) {
            var vm=this;
            var twen=new TWEEN.Tween({animatenum:oldValue});
            function animate() {
              requestAnimationFrame(animate);
              TWEEN.update();
            };
            twen.to({animatenum:newValue},750);
            twen.onUpdate(function(){
              //toFixed();保留几位小数
              vm.animatenum = this.animatenum.toFixed();
            })
            twen.start();
            animate();
          }
        }
      }
    }
</script>

<style scoped>
  @import "../assets/css/reset.css";
  table{
    width: 100%;
  }
</style>
