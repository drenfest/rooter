<template>
  <div>
    <header class="layout-header">
      <ghi-side-drawer></ghi-side-drawer>
    </header>
    <main class="main-content">
      <nuxt/>
    </main>
    <footer class="layout-footer"></footer>
  </div>
</template>
<script>
  import GhiSideDrawer from '~/components/GhiSideDrawer.vue'

  export default {
    components: {
      GhiSideDrawer
    }
  }
</script>
<style>
  html {
    word-spacing: 1px;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    box-sizing: border-box;
  }

  *,
  *:before,
  *:after {
    box-sizing: border-box;
    margin: 0;
  }
</style>
