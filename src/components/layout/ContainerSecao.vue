<template>
  <section class="container" :style="style">
    <div class="conteudo">
      <slot></slot>
    </div>
  </section>
</template>

<script>
export default {
  props: {
    img: String,
  },
  computed: {
    style() {
      return this.img
        ? {
            backgroundImage: `url(${this.img})`,
            backgroundSize: 'cover',
            backgroundAttachment: 'fixed',
          }
        : false;
    },
  },
};
</script>

<style scoped>
.container {
  padding: 3rem;
  min-height: 100vh;
  display: flex;
  align-items: center;
}
</style>