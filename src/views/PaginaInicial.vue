<template>
  <main id="inicio">
    <CabecalhoPrincipal :flutuante="true" />
    <SliderSobre />
    <SecaoRastreamento />
  </main>
</template>

<script>
import CabecalhoPrincipal from "@/components/layout/CabecalhoPrincipal.vue";
import SliderSobre from "@/components/layout/SliderSobre.vue";
import SecaoRastreamento from "@/components/layout/SecaoRastreamento.vue";

export default {
  components: {
    CabecalhoPrincipal,
    SliderSobre,
    SecaoRastreamento,
  },
};
</script>

<style>
</style>