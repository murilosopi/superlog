<template>
  <main id="home">
    <CabecalhoPrincipal :flutuante="true" />
    <ContainerSecao :img="require('@/assets/img/banners/1.png')">
      <TituloPrincipal
        tag="h2"
        texto="Super Log"
        :tamanho="1"
        variacao="destaque"
      />
      <TextoDestaque variacao="branco">
        Seu transporte e logística, super!
      </TextoDestaque>
    </ContainerSecao>
    <ContainerSecao>
      <TituloPrincipal
        tag="h2"
        texto="Rastreamento"
        :tamanho="2"
        variacao="escuro"
      />
    </ContainerSecao>
  </main>
</template>

<script>
import ContainerSecao from "@/components/ContainerSecao.vue";
import CabecalhoPrincipal from "@/components/CabecalhoPrincipal.vue";
import TituloPrincipal from "@/components/TituloPrincipal.vue";
import TextoDestaque from "@/components/TextoDestaque.vue";

export default {
  components: {
    ContainerSecao,
    CabecalhoPrincipal,
    TituloPrincipal,
    TextoDestaque,
  },
};
</script>

<style>
</style>