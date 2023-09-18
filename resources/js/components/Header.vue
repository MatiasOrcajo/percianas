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
                    <a data-scroll class="nav-link" href="#banner">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a data-scroll class="nav-link" href="#products">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a data-scroll class="nav-link" href="#quote">Calculadora</a>
                  </li>
                  <li class="nav-item">
                    <a data-scroll class="nav-link" href="#about">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a data-scroll class="nav-link" href="#contact">Contacto</a>
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