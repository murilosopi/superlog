<template>
  <component :is="tag" class="titulo-principal"> {{ texto }} </component>
</template>

<script>
export default {
  props: {
    tag: {
      type: String,
      required: true,
    },
    texto: String,
  },
};
</script>

<style scoped>
    .titulo-principal {
        color: var(--branco);
        font-weight: 700;
        text-transform: uppercase;
        font-size: 2.5em;
    }
</style>