<template>
  <ContainerSecao
    id="rastreamento"
    :img="require('@/assets/img/banners/2.png')"
  >
    <TituloPrincipal tag="h2" :tamanho="2" variacao="branco">
      <i class="fa-solid fa-map-location-dot"></i>
      Serviços
    </TituloPrincipal>

    <p>
      Na <strong>Super Log</strong>, entendemos a importância de armazenar e
      transportar suas mercadorias com eficiência e segurança. Somos
      especialistas em oferecer soluções abrangentes para todas as suas
      necessidades logísticas, desde armazenamento até entrega rápida. Aqui está
      um vislumbre dos serviços que oferecemos:
    </p>
  </ContainerSecao>
</template>

<script>
import ContainerSecao from "@/components/layout/ContainerSecao.vue";
import TituloPrincipal from "@/components/common/TituloPrincipal.vue";

export default {
  components: {
    ContainerSecao,
    TituloPrincipal,
  },
};
</script>

<style scoped>
#rastreamento {
  color: var(--branco);
}
</style>