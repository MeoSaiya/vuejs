<template>
  <div>
    <nav>
      <ul>
        <li><router-link to="./navigation-menu">Navigation Menu</router-link> </li>
        <li><router-link to="./inline-editor">Inline Editor</router-link> </li>
        <li><router-link to="./order-form">Order Form</router-link> </li>
        <li><router-link to="./switch-grid">Instant Search</router-link> </li>
        <li><router-link to="./instant-search">Switch Grid </router-link> </li>
        <li><router-link to="./test">Test</router-link> </li>
      </ul>
    </nav>
  </div>
</template>

<style scoped>
  ul{
    list-style: none;
    background-color: #563d7c;
    width: 900px;
    margin: 0 auto;
  }
  ul li{
    display: inline-block;
    width: 150px;
    height: 30px;
  }
  a{
    text-decoration: none;
    color: #ffffff;
    height: 25px;
    display: block;
    padding-top: 5px;
  }
  a:hover{
    background: #cccccc;
  }
</style>
