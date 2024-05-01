<template>
  <main id="home">
    <CabecalhoPrincipal :flutuante="true" />
    <SliderSobre />
    <ContainerSecao>
      <TituloPrincipal
        tag="h2"
        :tamanho="2"
        variacao="escuro"
      >
        <i class="fa-solid fa-map-location-dot"></i>
        Rastreamento
      </TituloPrincipal>
      <p>
        Nossa missão é oferecer total transparência e tranquilidade aos nossos
        clientes. Com nosso sistema de rastreamento de carga em tempo real, você
        pode acompanhar o progresso de suas remessas a qualquer hora, em
        qualquer lugar.
      </p>
      <p>
        Simplifique sua jornada logística e experimente a confiança de saber
        exatamente onde sua carga está a cada momento. Rastreie agora e tenha o
        controle em suas mãos.
      </p>
    </ContainerSecao>
  </main>
</template>

<script>
import ContainerSecao from "@/components/layout/ContainerSecao.vue";
import CabecalhoPrincipal from "@/components/layout/CabecalhoPrincipal.vue";
import TituloPrincipal from "@/components/common/TituloPrincipal.vue";
import SliderSobre from "@/components/layout/SliderSobre.vue";

export default {
  components: {
    ContainerSecao,
    CabecalhoPrincipal,
    TituloPrincipal,
    SliderSobre,
  },
};
</script>

<style>
</style>