<template>
  <div id="default-layout">
    <header class="header-container">
    <rooter-header-top-bar></rooter-header-top-bar>
    <rooter-header-bottom-bar></rooter-header-bottom-bar>
    </header>
    <rooter-hero></rooter-hero>
    <nuxt/>
    <rooter-specials></rooter-specials>
    <rooter-cta1></rooter-cta1>
    <rooter-areas-served></rooter-areas-served>
    <rooter-footer></rooter-footer>

  </div>
</template>
<script>
  import RooterHeaderTopBar from '@/components/RooterHeaderTopBar/'
import RooterHeaderBottomBar from '@/components/RooterHeaderBottomBar/'
import RooterHero from '@/components/RooterHero/'
import RooterSpecials from '@/components/RooterSpecials/'
import RooterCta1 from '@/components/RooterCta1/'
import RooterAreasServed from '@/components/RooterAreasServed/'
import RooterFooter from '@/components/RooterFooter/'
export default {
    name: 'DefaultLayout',
    data: () => {
      return {}
    },
    components: {
      RooterHeaderTopBar,
      RooterHeaderBottomBar,
      RooterHero,
      RooterSpecials,
      RooterCta1,
      RooterAreasServed,
      RooterFooter
    },
    computed: {

    }
  }
</script>
<style>
h1, h2, h3, h4, h5, h6, li, a{
  font-family: 'Open Sans', sans-serif;
}
/*----------COLUMN SYSTEM START----------*/
.row{
  display:flex;
  justify-content:space-between;
  align-items:center;
  align-content:center;
  flex-wrap:wrap;
}
.primary{
  background:#C24127;
}
.space-between{
  justify-content:space-between;
}
.col-1-2{
  width:50%;
}.col-1-3{
  width:30.2%;
}
.px-2{
  padding-left:2rem;
  padding-right:2rem;
}
.py-2{
  padding-top:2rem;
  padding-bottom:2rem;
}
.btn{
  background:#C24127;
  padding:.5rem 1rem;
  text-decoration:none;
  font-weight:500;
  border-radius:10px;
  margin:1rem;
  color:white;
}
/*----------COLUMN SYSTEM END----------*/
@media screen and (min-width:768px){
  .flex-menu{
    display:flex;
    flex-wrap:nowrap;
    flex-direction:row;
    justify-content:flex-end;
    align-items:center;
    margin-right:0;
    text-align:center;
  }
  .top-right, .bottom-right{
  }
  .menu-item{
    text-decoration:none;
    text-transform:capitalize;
  }
}
</style>
