<template>
  <div class="mt-5 pb-5 pt-0 py-md-5 my-md-5">
    <div id="carouselIviGreen" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators d-flex d-md-none">
        <button v-for="(value, key) in dataImages" type="button" data-bs-target="#carouselIviGreen" :data-bs-slide-to="key" :class="key === 0 ? 'active' : ''" :aria-current="key === 0 ? 'true' : ''" :aria-label="value.name"></button>
      </div>
      <div class="carousel-inner">
        <div v-for="(value, key) in dataImages" class="carousel-item" :class="key === 0 ? 'active' : ''">
          <div class="carousel-item-block-image" :style="'background-image: url(' + value.url + ');'"></div>
        </div>
      </div>
      <button class="carousel-control-prev d-none d-md-flex" type="button" data-bs-target="#carouselIviGreen" data-bs-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
      </button>
      <button class="carousel-control-next d-none d-md-flex" type="button" data-bs-target="#carouselIviGreen" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
      </button>
    </div>
  </div> 
</template>

<script>
  export default {
    data() {
      return {
        dataImages: {}
      };
    },
    methods: {
      loadImages() {
        fetch("/files/images.json", {
          method: 'GET',
          headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json',
          }
        })
        .then(r =>  r.json().then(data => ({status: r.status, body: data})))
        .then(obj => {
          this.dataImages = obj.body
        });
      }
    },
    created() {
      this.loadImages()
    }
  };
</script>