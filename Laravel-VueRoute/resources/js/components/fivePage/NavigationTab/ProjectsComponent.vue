<template>
  <li class="navi" @click="change">Projects</li>
</template>

<script>
  export default {
    name: 'ProjectsComponent',
    data () {
      return {
        item: ''
      }
    },
    methods: {
      change: function () {
        this.item = 'projects-content-component'
        this.$emit('change-content', this.item)
      }
    }
  }
</script>
