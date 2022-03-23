import { createApp } from 'vue'
import {createHead} from "@vueuse/head";
import VueMapboxTs from 'vue-mapbox-ts';
import LoadScript from "vue-plugin-load-script";
//import router from "./router";
import App from './App.vue'

const head = createHead()

createApp(App).use(head).use(VueMapboxTs).use(LoadScript).mount('#app')
//createApp(App).mount('#app')
