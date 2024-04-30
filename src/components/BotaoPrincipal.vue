<template>
  <component :is="link ? 'a' : 'button'" class="botao-principal">
    <slot></slot>
  </component>
</template>

<script>
export default {
  props: {
    link: {
      type: Boolean,
      default: false,
    },
  },
};
</script>

<style scoped>
  .botao-principal {
    color: var(--branco);
    background-color: var(--destaque);
    text-decoration: none;
    font-weight: bold;
    border-radius: .75rem;
    display: inline-block;
    padding: .5rem 1.5rem;
    transition: var(--dynamic);
  }

  .botao-principal:hover {
    transform: scale(1.01);
  }
</style>