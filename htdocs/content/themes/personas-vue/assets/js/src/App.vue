<template>
  <Mapa/>
  <Personas/>
</template>

<script>
//import HelloWorld from './components/HelloWorld.vue'
import Personas from "./components/Personas";
import Mapa from "./components/Mapa";

export default {
  name: 'App',
  components: {
    Personas,
    Mapa
    //HelloWorld
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
