<template>
  <main id="inicio">
    <CabecalhoPrincipal :flutuante="true" />
    <SliderSobre />
    <SecaoRastreamento />
    <SecaoServicos />
  </main>
</template>

<script>
import CabecalhoPrincipal from "@/components/layout/CabecalhoPrincipal.vue";
import SliderSobre from "@/components/layout/SliderSobre.vue";
import SecaoRastreamento from "@/components/layout/SecaoRastreamento.vue";
import SecaoServicos from "@/components/layout/SecaoServicos.vue";

export default {
  components: {
    CabecalhoPrincipal,
    SliderSobre,
    SecaoRastreamento,
    SecaoServicos,
  },
};
</script>

<style>
</style>