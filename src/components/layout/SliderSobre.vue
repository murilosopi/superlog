<template>
  <ContainerSecao :img="require('@/assets/img/banners/1.png')">
    <TituloPrincipal tag="h2" :tamanho="1" variacao="destaque">
      Super Log
    </TituloPrincipal>
    <TextoDestaque variacao="branco">
      Seu transporte e logística, super!
    </TextoDestaque>
  </ContainerSecao>
</template>

<script>
import ContainerSecao from '@/components/layout/ContainerSecao.vue';
import TituloPrincipal from '@/components/common/TituloPrincipal.vue';
import TextoDestaque from '@/components/common/TextoDestaque.vue';
export default {
  components: {
    ContainerSecao,
    TituloPrincipal,
    TextoDestaque
  }
};
</script>

<style>
</style>