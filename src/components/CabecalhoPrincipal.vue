<template>
  <header class="cabecalho-principal">
    <TituloPrincipal tag="h1" texto="Super Log" />
    <nav class="navegacao">
      <ul class="menu">
        <li class="item">
          <a class="link" href="">Sobre</a>
        </li>
        <li class="item">
          <a class="link" href="">Serviços</a>
        </li>
        <li class="item">
          <a class="link" href="">Rastrear</a>
        </li>
        <li class="item">
          <a class="link" href="">Contato</a>
        </li>
        <li class="item">
          <BotaoPrincipal href="" :link="true">Área do Cliente</BotaoPrincipal>
        </li>
      </ul>
    </nav>
  </header>
</template>

<script>
import BotaoPrincipal from './BotaoPrincipal.vue';
import TituloPrincipal from "./TituloPrincipal.vue";
export default {
  components: {
    TituloPrincipal,
    BotaoPrincipal
  },
};
</script>

<style>
.cabecalho-principal {
  background-color: rgba(19, 19, 19, 50%);
  display: grid;
  grid-template-columns: 1fr 3fr;
  padding: 1.5rem;
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