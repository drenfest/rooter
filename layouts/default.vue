<template>
  <div id="default-layout">
    <header class="header-container">
    <rooter-header-top-bar></rooter-header-top-bar>
    <rooter-header-bottom-bar></rooter-header-bottom-bar>
    </header>
    <nuxt/>
    <rooter-specials></rooter-specials>
    <rooter-cta1></rooter-cta1>
    <rooter-areas-served></rooter-areas-served>
    <rooter-ratings></rooter-ratings>
    <rooter-footer></rooter-footer>

  </div>
</template>
<script>
import RooterHeaderTopBar from '@/components/RooterHeaderTopBar/'
import RooterHeaderBottomBar from '@/components/RooterHeaderBottomBar/'
import RooterSpecials from '@/components/RooterSpecials/'
import RooterCta1 from '@/components/RooterCta1/'
import RooterAreasServed from '@/components/RooterAreasServed/'
import RooterRatings from '@/components/RooterRatings/'
import RooterFooter from '@/components/RooterFooter/'
export default {
    name: 'DefaultLayout',
    data: () => {
      return {
        hero:{
          heroImage:'background-image:url(/hero-house.jpg)',
          heroTitle: 'Dependable ChicagoLand',
          heroBigText: 'Plumbers',
          heroText: 'When it comes to great service for your plumbing and sewer needs you can count on Rooter Inc!',
          heroLink: '/contact',
          heroLinkTitle: 'Go To Contact Page',
          heroLinkText: 'Contact Us'
        }
      }
    },
    components: {
      RooterHeaderTopBar,
      RooterHeaderBottomBar,
      RooterSpecials,
      RooterCta1,
      RooterAreasServed,
      RooterRatings,
      RooterFooter
    },
    computed: {

    }
  }
</script>
<style>
  .page-enter-active {
    animation: acrossIn .40s ease-out both;
  }
  .page-leave-active {
    animation: acrossOut .60s ease-in both;
  }
  @keyframes acrossIn {
    0% {
      transform: translate3d(-100%, 0, 0);
    }
    100% {
      transform: translate3d(0, 0, 0);
    }
  }
  @keyframes acrossOut {
    0% {
      transform: translate3d(0, 0, 0);
    }
    100% {
      transform: translate3d(100%, 0, 0);
    }
  }
</style>
