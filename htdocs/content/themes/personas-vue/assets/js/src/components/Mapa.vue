<template>
  <div class="map" id="mapContainer">
    <mapbox-map
        :accessToken=accessToken
        mapStyle="streets-v11"
    >
      <mapbox-marker :lngLat="[10,10]" />
    </mapbox-map>
  </div>
</template>

<script>
import axios from "axios";
import { useHead } from '@vueuse/head'
import {computed, reactive} from "vue";

export default {
  name: "Mapa",
  data(){
    return{
      accessToken: "pk.eyJ1IjoibHVpc21hY2h1Y2EiLCJhIjoiY2wweDFrcjU3MHJmaTNmcDV0aWkxMHd2biJ9.o6SlbU7RSt1GTeNknu5C4g"

    }

  },
  setup() {
    const siteData = reactive({
      title: 'Mi gran Sitio Web Personas',
      description: "Mi sitio web favorito",
      link: ''
    })

    useHead({
      title: computed(() => siteData.title),
      meta: [
        {
          name: `description`,
          content: computed(() => siteData.description),
        },
      ],
      link: [
        {
          href: 'https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css',
          rel: 'stylesheet'
        }
      ],
      script: [
        {
          src: 'https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'
        }
      ]

    })
  },
}
</script>

<style scoped>
#mapContainer{
  width: 100%;
  height: 500px;
}

</style>