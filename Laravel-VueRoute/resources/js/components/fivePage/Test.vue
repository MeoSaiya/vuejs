<template>
   <div>
      <div class="user">
      <router-view></router-view>
    </div>
   </div>
</template>

<script>
import TodoItem from "./TodoItem";
export default {
  components: {
    TodoItem
  },
  data() {
    return {

    }
  }

};
</script>


<style>
.text {
  color: yellow;
}
.active {
  font-weight: bold;
}
</style>
