<template>
  <component :is="tag" class="titulo-principal" :class="classes">
    {{ texto }}
  </component>
</template>

<script>
export default {
  props: {
    tag: {
      type: String,
      required: true,
    },
    texto: String,

    // classes para estilização
    tamanho: {
      default: "",
      type: String,
    },
    variacao: {
      default: "",
      type: String,
    },
  },
  data() {
    return {
      classes: [this.tamanho, this.variacao].map((i) => `-${i}`)
    }
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

.titulo-principal.-destaque {
  color: var(--destaque);
}


.titulo-principal.-grande {
  font-size: 4.5em;
}
</style>