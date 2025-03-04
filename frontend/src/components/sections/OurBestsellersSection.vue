<template>
  <section class="slate-blue-bg py-md-5">
    <div class="container py-5 py-md-0 px-3 px-md-0 pt-md-5">
      <div>
        <h2 class="poppins-bold h2-text text-uppercase text-white text-center">
          Our bestsellers
        </h2>
      </div>
      <div class="my-4 pb-5 pt-md-2">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
          <div class="carousel-indicators d-flex d-md-none">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner" style="max-width: 992px; min-height: 480px;">
            <div class="carousel-item active">
              <img src="@/assets/img/image.png" class="d-block w-100"alt="">
            </div>
            <div class="carousel-item">
              <img src="@/assets/img/image.png" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="@/assets/img/image.png" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="@/assets/img/image.png" class="d-block w-100" alt="">
            </div>
          </div>
          <button class="carousel-control-prev d-none d-md-flex" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next d-none d-md-flex" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
        </div>
      </div>
    </div>
  </section>
</template>