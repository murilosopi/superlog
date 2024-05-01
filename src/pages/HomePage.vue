<template>
  <main id="home">
    <CabecalhoPrincipal />
    <ContainerSecao>
      <TituloPrincipal tag="h2" texto="Super Log" tamanho="grande" variacao="destaque"/>
    </ContainerSecao>
  </main>
</template>

<script>
import ContainerSecao from "@/components/ContainerSecao.vue";
import CabecalhoPrincipal from "@/components/CabecalhoPrincipal.vue";
import TituloPrincipal from '@/components/TituloPrincipal.vue';

export default {
  components: {
    ContainerSecao,
    CabecalhoPrincipal,
    TituloPrincipal,
  },
};
</script>

<style>
</style>