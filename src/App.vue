<template>
  <div id="app">
    <CabecalhoPrincipal :flutuante="true" />
    <router-view></router-view>
    <RodapePrincipal />
  </div>
</template>

<script>
import CabecalhoPrincipal from "@/components/layout/CabecalhoPrincipal.vue";
import RodapePrincipal from "@/components/layout/RodapePrincipal.vue";

export default {
  name: "App",
  components: { RodapePrincipal, CabecalhoPrincipal },
};
</script>

<style>
@import url("@/assets/styles/reset.css");
@import url("@/assets/styles/base.css");
@import url("@/libs/fontawesome/css/all.css");
</style>
