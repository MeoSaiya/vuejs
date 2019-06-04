<template>
  <li class="navi" @click="change">Contact</li>
</template>

<script>
  export default {
    name: 'ContactComponent',
    data () {
      return {
        item: ''
      }
    },
    methods: {
      change: function () {
        this.item = 'contact-content-component'
        this.$emit('change-content', this.item)
      }
    }
  }
</script>
