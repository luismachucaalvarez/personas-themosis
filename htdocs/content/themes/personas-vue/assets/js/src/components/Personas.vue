<template>
  <h2>Listado Personas</h2>


  <div class="container">
    <div class="cards">
        <div v-for="(item, index) in personas.data" :key="index">
          <div class="card">
            <div class="card-content">
              <p>{{ item.acf.rut}}</p>
              <p>{{ item.acf.nombre}}</p>
              <p>{{ item.acf.correo}}</p>
              <p>{{ item.acf.direccion.address}}</p>

            </div>
            <div class="card-footer has-text-centered">
              <!--<p>Iniciar Sesión | Visualizar Mapa</p>-->
              <!--<p><a @click="mostrarDireccionMapa">Vamos</a></p>-->

              <p><router-link to="'/mapa/' + item.acf.id ">Prueba</router-link></p>
            </div>
          </div>
        </div>

    </div>

  </div>

</template>

<script>
import axios from "axios";
import { useHead } from '@vueuse/head'
import {computed, reactive} from "vue";

export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Personas",

  data(){
    return{
      personas: []
    }
  },
  mounted() {
  axios
      .get('http://proyectopersonas.test/wp-json/wp/v2/personas')
      .then(response => {
        this.personas = response;
        console.log(this.personas.data[0])
      })
      .catch(error => (console.log(error)))

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
  methods: {
    mostrarDireccionMapa: function (){
      console.log(item.acf.direccion.address);

    }
  }
}

</script>


<style>


.cards{
  display: grid;

  grid-template-columns: repeat(3, 1fr);

  grid-auto-rows: auto;

  grid-gap: 1rem;
}
</style>