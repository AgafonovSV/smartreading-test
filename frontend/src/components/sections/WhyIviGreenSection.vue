<script setup>
	import CarouselIviGreen from '@/components/blocks/CarouselIviGreenBlock.vue'
  import TheMostTopics from '@/components/blocks/TheMostTopicsBlock.vue'
</script>

<template>
  <section class="ivi-green-section bg-white pt-md-5" id="ivi-green">
    <div class="container py-5 py-md-0 px-3 px-md-0 pt-md-5">
      <div>
        <h2 class="poppins-bold h2-text text-uppercase tc-2C2C2C text-center pb-3 pb-md-0">
          Why Ivi Green?
        </h2>
      </div>
      <div class="row g-0 align-items-center justify-content-center justify-content-md-between py-md-3 px-0">
        <div class="col-12 col-md-3 px-2 bw-284 text-center">
          <div>
            <h1 class="poppins-bold h1-text tc-32CD7A">
              40 000+
            </h1>
          </div>
          <div>
            <p class="tc-2C2C2C p-20px poppins-medium">products sold all around the world</p>
          </div>
        </div>
        <div class="col-12 col-md-3 px-2 bw-284 text-center">
          <div>
            <h1 class="poppins-bold h1-text tc-32CD7A">
              1 000+
            </h1>
          </div>
          <div>
            <p class="tc-2C2C2C p-20px poppins-medium">teachers use Ivi Green products</p>
          </div>
        </div>
        <div class="col-12 col-md-3 px-2 bw-284 text-center">
          <div>
            <h1 class="poppins-bold h1-text tc-32CD7A">
              30+
            </h1>
          </div>
          <div>
            <p class="tc-2C2C2C p-20px poppins-medium">countries use our toolkits to effectively teach</p>
          </div>
        </div>
      </div>

      <div class="row gx-0 align-items-start justify-content-between py-md-3 px-0 row-cols-1 row-cols-md-2 g-0 g-md-3">
        <div class="col align-self-stretch pb-3">
          <div class="ig-block mx-0 mr-md-1">
            <h3 class="poppins-medium h3-text tc-3E468F fix-mob-text">
              The challenges teachers are facing
            </h3>
            <p class="tc-2C2C2C p-16px poppins-regular">Teachers often face the challenge of spending extensive time searching for quality materials for their classes while students frequently approach them with more and more questions about their emotions, conflicts, self-organization methods, and family or friend relationships. The pandemic has exacerbated social-emotional problems among kids, making SEL one of the priorities for the school curriculum. Now even teachers specializing in subjects like math or language art need to incorporate social-emotional basics into their instructions.</p>
          </div>
        </div>
        <div class="col align-self-stretch pb-3">
          <div class="ig-block mx-0 ml-md-1">
            <h3 class="poppins-medium h3-text tc-3E468F fix-mob-text">
              Our solution
            </h3>
            <p class="tc-2C2C2C p-16px poppins-regular">Our toolkits provide teachers with practical, visual, science-based resources to effectively teach social and emotional learning to teens. Designed to enhance emotional intelligence and build resilience, Ivi Green educational toolkits offer structured activities, comprehensive guidelines, and ready-to-use materials that cater to the unique developmental needs of adolescents. Educators can foster a supportive learning environment that promotes emotional well-being and academic success by integrating these tools into their teaching.</p>
          </div>
        </div>
      </div>
      <div class="pt-2 text-center">
        <a href="#" class="btn btn-success btn-show-all-kits poppins-bold p-3 fw-bold" role="button" data-bs-toggle="button">Show all kits</a>
      </div>
      <CarouselIviGreen></CarouselIviGreen>
      <TheMostTopics></TheMostTopics>
    </div>
  </section>
</template>