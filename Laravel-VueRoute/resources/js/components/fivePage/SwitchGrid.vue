<template>
<div class="form">
  <div class="input">
    <input type="text" v-model="lookfor" placeholder="Enter your search terms">
    <span class="triangle"></span>
  </div>
  <ul>
    <li v-for="(item, index) in filterData" :key="index" v-if="item.active">
      <img :src="item.src" alt="">
      <p>{{item.content}}</p>
    </li>
  </ul>
</div>
</template>

<script>
export default {
  data() {
    return {
      gridSrc: [
        {
          active: true,
          src: "https://tutorialzine.com/media/2016/03/css-variables.jpg",
          content: "What You Need To Know About CSS Variables"
        },
        {
          active: true,
          src:
            "https://tutorialzine.com/media/2016/02/great-looking-pricing-tables.jpg",
          content: "Freebie: 4 Great Looking Pricing Tables"
        },
        {
          active: true,
          src:
            "https://tutorialzine.com/media/2016/02/interesting-resources-february.jpg",
          content:
            "20 Interesting JavaScript and CSS Libraries for February 2016"
        },
        {
          active: true,
          src:
            "https://tutorialzine.com/media/2016/02/quick-tip-responsive-headers.png",
          content: "Quick Tip: The Easiest Way To Make Responsive Headers"
        },
        {
          active: true,
          src:
            "https://tutorialzine.com/media/2016/01/learn-sql-20-minutes.png",
          content: "Learn SQL In 20 Minutes"
        },
        {
          active: true,
          src:
            "https://tutorialzine.com/media/2015/12/creating-your-first-desktop-app-with-electron.png",
          content: "Creating Your First Desktop App With HTML, JS and Electron"
        }
      ],
      lookfor: ""
    };
  },
  computed: {
    filterData: function() {
      var grid = this.gridSrc;
      var input = this.lookfor;
      if (!input)  return grid;
      input = input.trim().toLowerCase();
      grid = grid.filter(item => {
        if (item.content.indexOf(input) != -1) {
          return item;
        }
      });
      return grid;
    }
  }
};

var myMixins = {
  methods: {
    hello: function () {
      console.log('Mixin xin chào!')
    }
  }
}
</script>

<style scoped>
.form {
  width: 900px;
  text-align: center;
  margin: 0 auto;
}
.input {
  background-color: #5c9bb7;
  box-shadow: 0px 1px 1px #cccccc;
  border-radius: 2px;
  width: 400px;
  padding: 14px;
  margin: 45px auto 20px;
  position: relative;
}
input {
  background: #ffffff no-repeat 13px 13px;
  border: none;
  width: 100%;
  line-height: 19px;
  padding: 11px 0px;
  border-radius: 2px;
  box-shadow: 0 2px 8px #c4c4c4 inset;
  text-align: left;
  font-size: 14px;
  color: #738289;
  font-weight: bold;
  outline: none;
  text-indent: 40px;
}
img {
  width: 60px;
  height: 60px;
  float: left;
  border: none;
}
ul {
  list-style: none;
  width: 428px;
  margin: 0 auto;
  text-align: left;
}
li {
  border-bottom: 1px solid #ddd;
  padding: 10px;
  overflow: hidden;
}
p {
  margin-left: 75px;
  padding-top: 12px;
  font-weight: bold;
  color: #6e7a7f;
}
.triangle {
  width: 0;
  height: 0;
  border-top: 5px solid #5c9bb7;
  border-right: 5px solid #fff;
  border-left: 5px solid #fff;
  display: block;
  position: absolute;
  top: 69px;
  right: 204px;
  background-color: white;
}
</style>
