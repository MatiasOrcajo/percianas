<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example">
            <div class="container">
              <router-link class="navbar-brand" to="/">
                <img class="img-fluid" src="../img/logo-costado.png" alt="">
              </router-link>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <router-link class="nav-link active" to="#">Inicio</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="#">Productos</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="#">Nosotros</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="#">Contacto</router-link>
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" to="#">Calculadora</router-link>
                  </li>
                </ul>
              </div>
            </div>
        </nav>

    </div>
</template>

<script setup>
import { RouterLink, RouterView } from "vue-router";

</script>

<style lang="scss" scoped>

</style>