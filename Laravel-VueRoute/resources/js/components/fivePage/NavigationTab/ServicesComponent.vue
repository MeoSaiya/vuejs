<template>
  <li class="navi" @click="change">Services</li>
</template>

<script>
  export default {
    name: 'ServicesComponent',
    data () {
      return {
        item: ''
      }
    },
    methods: {
      change: function () {
        this.item = 'services-content-component'
        this.$emit('change-content', this.item)
      }
    }
  }
</script>
