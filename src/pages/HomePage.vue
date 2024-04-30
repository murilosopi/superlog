<template>
  <main id="home">
    <CabecalhoPrincipal />
    <ContainerSecao> Olá mundo </ContainerSecao>
  </main>
</template>

<script>
import ContainerSecao from "@/components/ContainerSecao.vue";
import CabecalhoPrincipal from "@/components/CabecalhoPrincipal.vue";

export default {
  components: {
    ContainerSecao,
    CabecalhoPrincipal,
  },
};
</script>

<style>
</style>