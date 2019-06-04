<template>
    <div class="editor">
        <template v-if="currentTab">
            <div class="input">
                <input type="text" v-input-focus="currentTab === true" v-model="editor" @blur="currentTab = false">
            </div>
        </template>
        <div class="pen" @click="changed">Edit me: {{editor}} </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            editor: 'Edit me',
            currentTab: false
        }
    },
    methods: {
        changed: function(){
            this.currentTab = true;
        }
    },
    directives: {
        inputFocus: {
            inserted: function (el, binding){
                if(binding.value){
                    el.focus()
                }
            }
        }
    }}
</script>

<style scoped>
.editor{
  height: 100px;
}
.pen{
  font-size: 22px;
  font-weight: bold;
  color: #6d8088;
  height: 30px;
  cursor: pointer;
  display: inline-block;
  margin: 0 auto;
  margin-top: 100px;

}
div.pen::before{
  content: '✎';
  display: inline-block;
  margin-right: 5px;
  font-weight: normal;
  vertical-align: text-bottom;
}
.input{
  background-color: #5c9bb7;
  background-image: -webkit-linear-gradient(top, #5c9bb7, #5392ad);
  background-image: -moz-linear-gradient(top, #5c9bb7, #5392ad);
  background-image: linear-gradient(top, #5c9bb7, #5392ad);
  box-shadow: 0 1px 1px #ccc;
  border-radius: 3px;
  width: 290px;
  padding: 10px;
  position: absolute;
  left: 50%;
  margin-left: -150px;
  top: 80px;
}
input {
  border: none;
  width: 100%;
  line-height: 34px;
  border-radius: 3px;
  box-shadow: 0 2px 6px #bbb inset;
  text-align: center;
  font-size: 16px;
  font-family: inherit;
  color: #8d9395;
  font-weight: bold;
  outline: none;
}
.input::before{
  content: '';
  position: absolute;
  border: 6px solid #5190ac;
  border-color: #5190ac transparent transparent;
  width: 0;
  height: 0;
  bottom: -12px;
  left: 50%;
  margin-left: -6px;
}
</style>
