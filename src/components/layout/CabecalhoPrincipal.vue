<template>
  <div class="cabecalho-principal-container">
    <header class="cabecalho-principal" :class="{ flutuante }">
      <TituloPrincipal tag="h1" variacao="branco" :tamanho="5"
        >Super Log</TituloPrincipal
      >
      <nav class="navegacao" ref="nav">
        <i ref="togglerMenu" class="toggler" :class="menuAberto ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'" @click="toggleMenu" @focusout="menuAberto = false" @blur="menuAberto = false"></i>
        <ul class="menu" ref="menu" :class="{ aberto: menuAberto}" @focusout="menuAberto = false" @blur="menuAberto = false">
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
  data() {
    return {
      menuAberto: false
    }
  },
  methods: {
    toggleMenu() {
      this.menuAberto = !this.menuAberto;
    }
  },
  mounted() {
    document.addEventListener('click', e => {
      if (!this.$refs.nav.contains(e.target)) this.menuAberto = false;
    });
  }
};
</script>

<style>
.cabecalho-principal-container {
  position: relative;
}

.cabecalho-principal {
  background-color: rgba(19, 19, 19, 50%);
  display: grid;
  grid-template-columns: max-content auto;
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

.toggler {
  display: none;
  background: none;
  border: none;
  outline: none;
  cursor: pointer;
  font-size: 1.6rem;
  color: var(--branco);
}

@media (max-width: 872px) {

  .navegacao {
    display: flex;
    align-items: flex-end;
    justify-content: center;
    flex-direction: column;
    text-align: right;
    position: relative;
  }

  .menu {
    display: none;
  }

  .menu.aberto {
    display: flex;
    flex-direction: column;
    position: absolute;
    top: 80%;
    width: max-content;
    height: max-content;
    background-color: var(--preto-50);
    padding: 1rem;
    border-radius: 5px;
  }

  .toggler {
    display: block;
    margin-left: auto;
  }
}
</style>