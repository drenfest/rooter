<template>
  <div id="side-drawer-wrapper">
    <button aria-label="Main Menu Toggle Button" id="side-drawer-button" :class="{'open': drawerToggled}" v-on:click="onToggleDrawer()">
      <hr class="top-line"/>
      <hr class="middle-line"/>
      <hr class="bottom-line"/>
    </button>
    <aside id="side-drawer" :class="{'open': drawerToggled}">
      <header><h2><a href="tel:+1(847)426-1122" class="main-nav-title">(847) 426-1122</a></h2><h4 class="main-nav-subtitle">Call For A Free Estimate</h4></header>
      <main>
        <nav id="main-nav">
          <ul class="container">
            <li  v-for="route of routes"  class="menu-item">
              <nuxt-link :to="route" :title="route.replace(/\//g,'').replace(/-/g,' ').toUpperCase()"> {{ route.replace(/\//g,'').replace(/-/g,' ').toUpperCase() }}</nuxt-link>
            </li>
          </ul>
        </nav>
      </main>
    </aside>
  </div>
</template>
<script>
  export default {
    name: 'GhiSideDrawer',
    data () {
      return {
        drawerToggled: false
      }
    },
    methods: {
      onToggleDrawer: function () {
        this.drawerToggled = !this.drawerToggled
      }
    },
    computed: {
      routes () {
        const context = require.context('../pages', false, /(?<!index)\.vue$/) // matches all files in pages directory that don't start with index and that DO end with .vue
        return context.keys().map(k => {
          return '/' + k.split('/')[1].split('.')[0]
        })
      }
    }
  }
</script>
<style scoped>
  /*--------------------------SIDE DRAWER BUTTON START----------------------*/
  button:focus {
    outline: none;
  }
  #side-drawer header{
    background: #161616;
    margin:0;
    padding: 1px 2px 20px 2px;
  }
  #side-drawer main{
    padding: 10px 5px;
  }
  #side-drawer-button {
    position: absolute;
    z-index: 3;
    top: 5px;
    right: 5px;
    border: none;
    background: none;
    padding: .5rem 1rem;
    width: 60px;
    transition: all .5s ease-out;
  }

  #side-drawer-button hr {
    border: none;
    background: white;
    height: 3px;
    width: 100%;
    margin: 5px auto;
    transition: all .5s ease-out;
  }

  #side-drawer-button .middle-line {
    width: 100%;
    opacity: 1;
  }

  #side-drawer-button.open {
    top: 19px;
    right: 250px;
    width:55px;
  }
  #side-drawer-button.open .top-line {
    transform-origin: center;
    transform: rotate(45deg);
    height:2px;
  }

  #side-drawer-button.open .middle-line {
    width: 0;
    opacity: 0;
    transition: all .3s ease-out;
    height:2px;
  }

  #side-drawer-button.open .bottom-line {
    transform-origin: center;
    transform: rotate(-45deg);
    margin-top: -14px;
    height:2px;
  }
  @media screen and (min-width:850px){
    #side-drawer-wrapper{
      display:none;
    }
    #side-drawer-button{
      display:none;
    }
  }

  /*--------------------------SIDE DRAWER BUTTON END----------------------*/
  /*--------------------------SIDE DRAWER START----------------------*/
  #side-drawer-wrapper{
    z-index: 999;
    position: relative;
  }
  aside {
    position: absolute;
    z-index: 2;
    top: 0;
    right: -100%;
    width: 300px;
    height: 100vh;
    background: #222222;
    box-shadow: -4px 2px 8px rgba(0, 0, 0, .26);
    text-align: center;
    transition: all .5s ease-out;
    overflow-y: scroll;
  }

  aside.open {
    right: 0;
  }
  aside>header>h2{
    margin-top: 1rem;
  }
  .main-nav-title {
    color: white;
    font-weight:400;
    text-decoration:none;
  }
  .main-nav-subtitle {
    color: #9a9a9a;
    font-weight:normal;
    margin-top:2px;
  }

  #main-nav > .container {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  #main-nav > .container > .menu-item {
    display: block;
    color: white;
    text-align: center;
    width: 100%;
    padding: .5em 0;
  }

  #main-nav > .container > .menu-item a {
    color: white;
    text-decoration: none;
    transition: all .2s;
  }

  #main-nav > .container > .menu-item a:hover {
    font-weight: bold;

  }

  /*--------------------------SIDE DRAWER END----------------------*/
</style>
