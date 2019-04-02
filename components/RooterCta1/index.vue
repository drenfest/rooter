<template>
  <div id="cta1-section" class="section">
    <div class="dkbg">
      <h3 class="white-text">We are ready to help you with all your plumbing needs!</h3>
      <nuxt-link class="btn primary-bg" to="/contact" title="Go To Contact Page">Contact Us</nuxt-link>
    </div>
  </div>
</template>

<script>
	export default {
	  name: 'RooterCta1'
	}
</script>

<style scoped>
  #cta1-section{
    background:url(~assets/images/calltoactionwide.jpg);
    background-size:cover;
    min-height:300px;
    margin:2em 0;
  }
  .dkbg{
    background:rgba(0,0,0,.7);
    max-width:40%;
    margin-left:10%;
    padding: 1rem;
    height: 300px;
    align-items: center;
    align-content: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .white-text{
    color:white;
  }
  .btn{
    max-width:150px;
    text-align:center;
  }
  @media screen and (min-width: 768px){
    .dkbg{
      max-width:40%;
      margin-left:10%;
    }
  }
</style>
