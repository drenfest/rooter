<template>
  <div id="footer-section" class="section">
    <p class="copyright">&copy; {{ thisYear }} All Rights Reserved By Rooter-Inc</p>
  </div>
</template>

<script>
  var d = new Date()
export default {
    name: 'RooterFooter',
    data () {
      return {
        thisYear: d.getFullYear()
      }
    }
}
</script>

<style scoped type="css/sass">
  #footer-section{
    background:#4F4F4F;
  }
  .copyright{
    text-align:center;
    color:white;
    padding: 1rem;
  }
</style>
