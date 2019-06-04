<template>
  <div class="navigation">
    <ul>
        <home-component @change-content="changed" :class="[currentTab === 'home-content-component' ? 'active' : null]"></home-component>
        <projects-component @change-content="changed" :class="[currentTab === 'projects-content-component' ? 'active' : null]"></projects-component>
        <services-component @change-content="changed" :class="[currentTab === 'services-content-component' ? 'active' : null]"></services-component>
        <contact-component @change-content="changed" :class="[currentTab === 'contact-content-component' ? 'active' : null]"></contact-component>
    </ul>
    <div class="content">
          <component :is="componentName"></component>
    </div>
  </div>
</template>

<script>

import HomeComponent from './NavigationTab/HomeComponent'
import ProjectsComponent from './NavigationTab/ProjectsComponent'
import ContactComponent from './NavigationTab/ContactComponent'
import ServicesComponent from './NavigationTab/ServicesComponent'

import HomeContentComponent from './NavigationContent/HomeContentComponent'
import ProjectsContentComponent from './NavigationContent/ProjectsContentComponent'
import ServicesContentComponent from './NavigationContent/ServicesContentComponent'
import ContactContentComponent from './NavigationContent/ContactContentComponent'

export default {
  components: {
    HomeComponent,
    ProjectsComponent,
    ServicesComponent,
    ContactComponent,
    HomeContentComponent,
    ProjectsContentComponent,
    ServicesContentComponent,
    ContactContentComponent,
  },
  data() {
    return {
      currentTab: 'home-content-component'
    }
  },
  computed:{
      componentName: function(){
        return this.currentTab
      }
  },
  methods: {
      changed: function(item){
          this.currentTab = item
          return item
      }
  }
}
</script>

<style scoped>
  .content{
    margin: 0 auto;
    font-size: 22px;
    color: #7d9098
  }
  ul{
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    margin: 0 auto;
    display: inline-block;
    background-color: #389dc1;
    padding-left: 0px;
    margin-bottom: 50px;
    border-radius: 3px;
  }
  li.navi{
    padding: 18px 30px;
    color: #ffffff;
    display: inline-block;
    transition: background-color 0.25s;
    cursor: pointer;
  }
  .active{
    background-color: #e35885
  }
  b{
    color: #ffffff;
    display: inline-block;
    padding: 5px 10px;
    background-color: #c4d7e0;
    border-radius: 2px;
    text-transform: uppercase;
    font-size: 18px;
  }
  p{
    font-weight: bold;
  }
</style>
