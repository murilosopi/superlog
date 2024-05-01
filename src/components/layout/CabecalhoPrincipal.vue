<template>
  <div class="cabecalho-principal-container">
    <header class="cabecalho-principal" :class="{ flutuante }">
      <TituloPrincipal tag="h1" variacao="branco" :tamanho="5"
        >Super Log</TituloPrincipal
      >
      <nav class="navegacao">
        <ul class="menu">
          <li class="item">
            <a class="link" href="#sobre">Sobre</a>
          </li>
          <li class="item">
            <a class="link" href="#servicos">Serviços</a>
          </li>
          <li class="item">
            <a class="link" href="#rastreamento">Rastrear</a>
          </li>
          <li class="item">
            <a class="link" href="#contato">Contato</a>
          </li>
          <li class="item">
            <BotaoPrincipal href="#area-do-cliente" :link="true"
              >Área do Cliente</BotaoPrincipal
            >
          </li>
        </ul>
      </nav>
    </header>
  </div>
</template>

<script>
import BotaoPrincipal from "@/components/common/BotaoPrincipal.vue";
import TituloPrincipal from "@/components/common/TituloPrincipal.vue";
export default {
  props: {
    flutuante: Boolean,
  },
  components: {
    TituloPrincipal,
    BotaoPrincipal,
  },
};
</script>

<style>
.cabecalho-principal-container {
  position: relative;
}

.cabecalho-principal {
  background-color: rgba(19, 19, 19, 50%);
  display: grid;
  grid-template-columns: 1fr 3fr;
  padding: 1.5rem;
}

.cabecalho-principal.flutuante {
  position: absolute;
  width: 100%;
}

.navegacao {
  margin-left: auto;
}

.link {
  text-decoration: none;
  font-weight: bold;
  font-size: 1em;
  color: var(--branco);
  transition: var(--dinamico);
}

.link:hover {
  color: var(--destaque);
}

.menu {
  display: flex;
  height: 100%;
  align-items: center;
  gap: 1rem;
}
</style>