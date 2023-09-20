<template>
    <div>   
        <div id="banner" class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2>BIENVENIDOS A</h2>
                    <h1>FEBO DECO</h1>
                </div>
            </div>
        </div>
    </div>
    <Presentation />
    <Products />
    <Quote />
    <About />
    <Contact/>
</template>

<script setup>
import Presentation from './Presentation.vue';
import Products from './Products.vue';
import Quote from './Quote.vue';
import About from './About.vue';
import Contact from './Contact.vue';


</script>
