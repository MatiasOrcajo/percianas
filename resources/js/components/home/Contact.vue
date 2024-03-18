<template>
    
    <div id="contact" class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-xs-12 map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.229223517338!2d-58.32473093519592!3d-34.69939794142751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a3325fc82e9d9b%3A0x1a50a9d2b994cf7!2sAv.%20Bartolom%C3%A9%20Mitre%205752%2C%20Wilde%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1695238402542!5m2!1ses-419!2sar" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-sm-6 col-xs-12 contacto">
          <div class="col-12 titulo">
            <h1>SOLICITÁ TU PRESUPUESTO</h1>
            <h2>FORMULARIO DE CONTACTO</h2>
          </div>
          <form @submit.prevent="submitForm">
            <div class="col-md-6 datos">
              <input type="text" v-model="name" required placeholder="Nombre completo">
            </div>
            <div class="col-md-6 datos">
              <input type="text" v-model="phone" required placeholder="Teléfono">
            </div>
            <div class="col-12 email">
              <input type="text" v-model="email" required placeholder="Email">
            </div>
            <div class="col-12">
              <textarea name="" id="" v-model="comment" cols="30" rows="10" required placeholder="Consulta"></textarea>
            </div>
            <div class="row">
              <div class="col-9 tu_consulta">
                <img src="../../img/logo-costado.png" alt="" class="img-fluid"> <br> <br>
                <span><a target="_blank" href="https://www.instagram.com/cortinasrollerfebo/">
                  <i class="fa-brands fa-instagram"></i>
                </a></span>
                <span><a target="_blank" href="https://www.facebook.com/Cortinas.Roller.Febo.Deco">
                  <i class="fa-brands fa-facebook"></i>
                </a></span>
                <span class="whatsapp"><a target="_blank" href="https://wa.me/5491128765926">
                  <i class="fa-brands fa-whatsapp"></i>
                </a></span>
              </div>
              <div class="col-3 btn">
                <a href="" @click.prevent="submitForm">ENVIAR</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'; 

const name = ref(''); 
const phone = ref(''); 
const email = ref(''); 
const comment = ref(''); 
 

function submitForm() { 
  const formData = { 
    name: name.value, 
    phone: phone.value, 
    email: email.value, 
    comment: comment.value, 
  }; 

  axios.post('/enviar-email', formData)
    .then(response => {
      console.log(response.data);
      // Clear the form fields
      name.value = '';
      phone.value = '';
      email.value = '';
      comment.value = '';
    })
    .catch(error => {
      console.error(error);
    });
}

</script>

<style lang="scss" scoped>
.tu_consulta {
  margin-bottom: 30px;
  span {
    margin: 5px 15px 5px 0;
    padding: 7px 10px;
    border-radius: 50px;
    background-color: #000;
    a {
      color: #fff;
      text-decoration: none;
    }
  }
}


</style>