<template>
  <div class="card">
    <div id ="card-title" class="card-content" style="max-width: 210px; margin: 0 auto">
      <p class="title has-text-centered has-text-weight-normal is-size-4">{{ cardTitle }}</p>
    </div>
    <div class="card-content">
      <figure class="image">
        <img :src="cardImage" alt="Placeholder image" style="max-height: 156px; max-width: 156px; margin: 0 auto"/>
      </figure>
    </div>
    <div class="card-content description">
      <div class="content has-text-centered">
        {{ cardContent }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['cardTitle', 'cardContent', 'cardImage']
}
</script>

<style lang="css">
.card {
  border-radius: 0.55rem;
  box-shadow: 0.1rem 0.1rem 0.1rem 0.1rem #b8b8b8;
}

#card-title {
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.description {
  min-height: 20vh;
}
</style>