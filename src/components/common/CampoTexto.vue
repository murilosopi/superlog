<template>
  <div class="campo-texto">
    <label v-if="nome" :for="id">{{ nome }}</label>
    <input
      type="text"
      :id="id"
      :name="name"
      ref="inputCpfCnpj"
      v-model="valor"
    />
  </div>
</template>

<script>
export default {
  props: ["id", "name", "nome", "value"],
  data() {
    return {
      valor: this.value,
    };
  },
  watch: {
    valor() {
      this.$emit("input", this.valor);
    },
  },
};
</script>

<style scoped>

.campo-texto, .campo-texto > * {
  width: 100%;
}

.campo-texto label {
  font-weight: 500;
  font-style: italic;
}
.campo-texto input,
.campo-texto label {
  display: block;
}

.campo-texto input {
  border-radius: 10px;
  background-color: var(--secundario);
  padding: .25rem 1.25rem;
  border: none;
  outline: none;
  transition: .3s;
}

.campo-texto input:focus {
  box-shadow: 0px 1px 3px 1px var(--destaque-pastel);
  outline: 1px solid var(--destaque);
}
</style>