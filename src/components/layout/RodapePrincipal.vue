<template>
  <footer id="rodape-principal">
    <address>
      <a href="https://maps.app.goo.gl/hwaafM1YurNWA2yL8" target="_blank">
        <i class="fa-solid fa-location-dot"></i>
        Rua Padre Aureliano, 59, Vila Silviania, Carapicuíba, SP
      </a>
      <a href="tel:+55 (11) 5198-0889">
        <i class="fa-solid fa-phone"></i>
        (11) 5198-0889
      </a>
    </address>
    <p class="copyright">
      Copyright &copy; 2024 - Super Log - Todos os direitos reservados.
    </p>
  </footer>
</template>

<script>
export default {};
</script>

<style scoped>
#rodape-principal {
  background-color: var(--escuro);
  color: var(--branco);
  padding: 3rem 1rem 1rem 3rem;
  text-align: center;
  font-size: 0.8em;
}

#rodape-principal a {
  color: var(--branco);
  text-decoration: none;
  font-weight: bold;
  display: block;
  margin-bottom: 1rem;
}

.copyright {
  padding-top: 1rem;
  border-top: 1px solid var(--preto-50);
}
</style>
