<template>
  <div class="form">
    <div class="tab">
      <span @click="currentTab =  'grid'" :class="[currentTab === 'grid' ? 'active' : null]" class="grid-icon"></span>
      <span @click="currentTab =  'list'" :class="[currentTab === 'list' ? 'active' : null]" class="list-icon"></span>
    </div>
    <template v-if="currentTab === 'grid'">
      <ul class="grid">
        <li v-for="(item, index) in gridSrc" :key="index"><img :src="item.src" alt=""></li>
      </ul>
    </template>
    <template v-if="currentTab === 'list'" >
      <ul class="list">
        <li v-for="(item, index) in gridSrc" :key="index">
          <img :src="item.src" alt="">
          <p>{{item.content}}</p>
        </li>
      </ul>
    </template>
  </div>
</template>

<script>
export default {
  data() {
    return {
      currentTab: 'grid',
      gridSrc: [
        { src: 'https://tutorialzine.com/media/2016/03/css-variables.jpg', content: 'What You Need To Know About CSS Variables'},
        { src: 'https://tutorialzine.com/media/2016/02/great-looking-pricing-tables.jpg', content: 'Freebie: 4 Great Looking Pricing Tables'},
        { src: 'https://tutorialzine.com/media/2016/02/interesting-resources-february.jpg', content: '20 Interesting JavaScript and CSS Libraries for February 2016'},
        { src: 'https://tutorialzine.com/media/2016/02/quick-tip-responsive-headers.png', content: 'Quick Tip: The Easiest Way To Make Responsive Headers'},
        { src: 'https://tutorialzine.com/media/2016/01/learn-sql-20-minutes.png', content: 'Learn SQL In 20 Minutes'},
        { src: 'https://tutorialzine.com/media/2015/12/creating-your-first-desktop-app-with-electron.png', content: 'Creating Your First Desktop App With HTML, JS and Electron'},
      ],
    }
  }
}
</script>
<style>
  .form{
    width: 710px;
    margin: 0 auto;
  }
  .tab{
    background-color: #5c9bb7;
    background-image: -webkit-linear-gradient(top, #5c9bb7, #5392ad);
    box-shadow: 0 1px 1px #ccc;
    border-radius: 2px;
    width: 580px;
    padding: 10px;
    margin: 45px auto 25px;
    position: relative;
    text-align: right;
    line-height: 1;
  }
  .tab span{
    background: #4987a1 center center no-repeat;
    width: 32px;
    height: 32px;
    display: inline-block;
    text-decoration: none !important;
    margin-right: 5px;
    border-radius: 2px;
    cursor: pointer;
  }
  ul.grid{
    list-style: none;
    width: 570px;
    margin: 0 auto;
    text-align: left;
  }
  ul.grid li {
    padding: 2px;
    float: left;
  }
  ul.grid li img{
    width: 280px;
    height: 280px;
    object-fit: cover;
    display: block;
    border: none;
  }
  ul.list {
    list-style: none;
    width: 500px;
    margin: 0 auto;
    text-align: left;
  }
  ul.list li {
    border-bottom: 1px solid #ddd;
    padding: 10px;
    overflow: hidden;
  }
  ul.list li p {
    margin-left: 135px;
    font-weight: bold;
    color: #6e7a7f;
  }
  ul.list li img {
    width: 120px;
    height: 120px;
    float: left;
    border: none;
  }
  .active{
    background-color: #c14694!important;
  }
</style>
