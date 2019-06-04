<template>
  <li class="navi" @click="change" >Home</li>
</template>

<script>
  export default {
    data () {
      return {
        item: ''
      }
    },
    methods: {
    change: function(){
        this.item = 'home-content-component'
        this.$emit('change-content', this.item)
        }
    },
  }
</script>
