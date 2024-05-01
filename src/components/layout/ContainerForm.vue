<template>
  <form class="container-form" @submit.prevent="(e) => $emit('submit', e)">
    <slot></slot>
  </form>
</template>

<script>
export default {};
</script>

<style>
.container-form {
  padding: 1.5rem 2rem 2rem 2rem;
  border: 1px solid var(--secundario);
  border-radius: 1.2rem;
}
</style>