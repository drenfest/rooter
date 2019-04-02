<template>
  <div class="hero-section">
    <div class="hero-bg" :style="heroImage">
      <div class="hero-bg-overlay"></div>
        <div class="hero-left">
          <h2 class="hero-title">{{ heroTitle }} <br><span class="hero-big-text">{{ heroBigText }}</span>
          </h2>
          <p class="hero-text">{{ heroText }}</p>
          <a class="hero-link btn" :href="heroLink" :title="heroLinkTitle">{{ heroLinkText }}</a>
        </div>
        <div class="hero-right">
          <div class="white-slant">
            <div class="primary-slant">
              <img src="~/assets/images/hero-van.png" alt="Rooter Van">
            </div>
          </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'RooterHero',
  data () {
    return {
      // heroImage: 'background-image:url(/hero-house.jpg);',
      // heroTitle: 'Dependable ChicagoLand',
      // heroBigText: 'Plumbers',
      // heroText: 'When it comes to great service for your plumbing and sewer needs you can count on Rooter Inc!',
      // heroLink: '/contact',
      // heroLinkTitle: 'Go To Contact Page',
      // heroLinkText: 'Contact Us'
    }
  },
  props:{
    heroImage: "",
    heroTitle: "",
    heroBigText: "",
    heroText: "",
    heroLink: "",
    heroLinkTitle: "",
    heroLinkText: ""
  }
}
</script>

<style scoped>
  .hero-bg-overlay{
    position:absolute;
    z-index: 2;
    background: linear-gradient(90deg, rgba(0, 0, 0, 0.8) 51%, rgba(255, 255, 255, 0.0) 123%);
    width: 100%;
    height: 100%;
  }
  .hero-bg{
    position: relative;
    display:flex;
    background-size: cover;
    background-attachment: local;
    background-repeat: no-repeat;
    overflow:hidden;
    justify-content:center;
    align-items:center;
    align-content:center;
    text-align:center;
  }
  .hero-left{
    position: relative;
    text-align: center;
    display: flex;
    align-content: center;
    align-items: center;
    width: 100%;
    flex-direction: column;
    padding: 2rem;
  }
  .hero-right{
    display:none;
  }
  .white-slant, .primary-slant{
    height:0;
    border-left:150px solid transparent;
    border-top-color:transparent;
  }
  .white-slant{
    border-bottom: 380px solid rgba(255, 255, 255, .6)
  }
  .primary-slant{
    border-bottom: 400px solid #C24127;
    margin-left:-100px;
    position:relative;
  }
  .hero-right img{
    display:none;
  }
  .hero-title, .hero-big-text, .hero-text, .hero-link{
    color:white;
    position:relative;
    z-index:3;
    text-align:center;
  }
  .hero-title{
    font-size:30px;
    text-transform:uppercase;
  }
  .hero-big-text{
    font-size:54px;
    font-weight:bold;
  }
  .hero-text{
    margin-bottom:20px;
  }
  .hero-link{
    text-align:center;
  }
  @media screen and (min-width:768px){
    .hero-bg-overlay{
      position:absolute;
      z-index:2;
      background: linear-gradient(90deg, rgba(0, 0, 0, 0.6) 0%, rgba(255, 255, 255, 0.0) 50%);
      width:100%;
      height:100%;
    }
    .hero-bg{
      position: relative;
      display:flex;
      background-size: cover;
      background-attachment: local;
      background-repeat: no-repeat;
      overflow:hidden;
      justify-content:center;
      align-items:center;
      align-content:center;
      text-align:center;
    }
    .hero-left, .hero-right{
      width:50%;
    }
    .hero-left{
      position:relative;
      padding-left:3rem;
      text-align:left;
    }
    .hero-right{
      display:block;
      position:relative;
      z-index:4;
      text-align: right;
    }
    .white-slant, .primary-slant{
      height:0;
      border-left:150px solid transparent;
      border-top-color:transparent;
    }
    .white-slant{
      border-bottom: 380px solid rgba(255, 255, 255, .6)
    }
    .primary-slant{
      border-bottom: 400px solid #C24127;
      margin-left:-100px;
      position:relative;
    }
    .hero-right img{
      display:block;
      position:absolute;
      right: 3rem;
      top: 219px;
      transform: translateY(-50%);
      max-width: 380px;
    }
    .hero-title, .hero-big-text, .hero-text, .hero-link{
      color:white;
      position:relative;
      z-index:3;
      text-align:left;
    }
    .hero-title{
      font-size:30px;
      text-transform:uppercase;
    }
    .hero-big-text{
      font-size:60px;
      font-weight:bold;
    }
    .hero-text{
      margin-bottom:20px;
    }
    .hero-link{
      max-width:150px;
      text-align:center;
    }
  }
  @media screen and (min-width:1000px){
    .hero-right img{
      max-width: 500px;
    }
  }
  @media screen and (min-width:1160px){
    .hero-right img{
      max-width: 700px;
    }
  }
</style>
