<template>
  <div class="order-form">
    <h1 class="services">Services</h1>
    <ul>
      <li :class="[currentTab.indexOf(item) != -1 ? 'active' : null]" @click="change(item)" v-for="(item, index) in gridData" :key="index"> {{item.name}} <span>${{item.money}}.00</span></li>
    </ul>
    <div class="title"> Total <span>${{total}}.00</span></div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      total: 0,
      gridData: [
        {name: 'Web Development', money: 300},
        {name: 'Design',          money: 400},
        {name: 'Integration',     money: 250},
        {name: 'Training',        money: 220}
      ],
      currentTab: [],
      checkItem: '',
    }
  },
  computed:{

  },
  methods: {
    change: function(item) {
      this.checkItem = this.currentTab.indexOf(item );
      if(this.checkItem != -1){
        this.currentTab.splice(this.checkItem, 1)
        this.total -= item.money
      }else{
        this.currentTab.push(item)
        this.total += item.money
      }
    }
  }
}
</script>

<style scoped>
.services{
  color: #fff;
  font-size: 64px;
  font-family: 'Cookie', cursive;
  font-weight: normal;
  line-height: 1;
  text-align: center;
  text-shadow: 0 3px 0 rgba(0,0,0,0.1);
}
.order-form{
  background-color: #61a1bc;
  border-radius: 2px;
  box-shadow: 0 1px 1px #ccc;
  width: 500px;
  padding: 35px 60px;
  margin: 50px auto;
}
ul{
  color: #fff;
  font-size: 20px;
  font-weight: bold;
  text-align: left;
  margin: 20px 0 15px -40px;
}
li{
  padding: 20px 30px;
  background-color: #e35885;
  margin-bottom: 8px;
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
  cursor: pointer;
  list-style: none;
}
.active{
  background-color: #8ec16d;
}
span{
  float: right;
}
.title{
  border-top: 1px solid rgba(255,255,255,0.5);
  padding: 15px 30px;
  font-size: 20px;
  font-weight: bold;
  text-align: left;
  color: #fff;
}
</style>
