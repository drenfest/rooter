<template>

	<div class="bottom-bar">
    <div class="logo-offset"></div>
    <div class="bottom-right">
      <nav class="bottom-menu">
        <ul class="flex-menu">
            <template v-for="route of routes">
              <template v-if="route.children.length < 1">
                <li class="menu-item">
                  <nuxt-link :to="route.path" :title="route.title">{{ route.text }}</nuxt-link>
                </li>
              </template>
              <template v-else="">
                <li class="menu-item menu-item-has-children">
                  <nuxt-link :to="route.path" :title="route.title">{{ route.text }}</nuxt-link>
                  <ul class="submenu">
                    <template v-for="child of route.children">
                      <li class="menu-item">
                        <nuxt-link :to="child.path" :title="child.title">{{ child.text }}</nuxt-link>
                      </li>
                    </template>
                  </ul>
                </li>
              </template>
            </template>
        </ul>

      </nav>
      <div class="phone-number">
        <a :href="phoneNumber.link" title="Click Here To Call Now">{{ phoneNumber.text }}</a>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  name: 'HeaderBottomBar',
  data () {
    return {
      routes: [
        {
          id: 1,
          path: '/drain-cleaning',
          text: 'Drain Cleaning',
          title: 'Plumbing Service Drain Cleaning',
          children:[]
        },
        {
          id: 2,
          path: '/faucets-and-sinks',
          text: 'Faucets & Sinks',
          title: 'Plumbing Service Faucets & Sinks',
          children:[]
        },{
          id: 3,
          path: '/gas-pipes',
          text: 'Gas Pipes',
          title: 'Plumbing Service Gas Pipes',
          children:[]
        },{
          id: 4,
          path: '/leaks',
          text: 'Pipe Breaks & Leaks',
          title: 'Plumbing Service Pipe Breaks & Leaks',
          children:[]
        },{
          id: 5,
          path: '/sewage-pumps',
          text: 'Sewage Pumps',
          title: 'Plumbing Service Sewage Pumps',
          children:[]
        },{
          id: 6,
          path: '/showers-and-tubs',
          text: 'Showers & Tubs',
          title: 'Plumbing Service Showers & Tubs',
          children:[]
        },{
          id: 7,
          path: '/sump-pumps',
          text: 'Sump Pumps',
          title: 'Plumbing Service Sumps Pumps',
          children:[]
        },{
          id: 8,
          path: '/toilets',
          text: 'Toilets',
          title: 'Plumbing Service Toilets',
          children:[]
        },{
          id: 9,
          path: '/water-heaters',
          text: 'Water Heaters',
          title: 'Plumbing Service Water Heaters',
          children:[]
        },

      ],
      phoneNumber: {
        link: "tel:+18474261122",
        text: "(847)426-1122 "
      }
    }
  },
  computed: {
  }
}

</script>

<style scoped type="css/sass">
  .bottom-bar{
    min-height: 55px;
  }
  .bottom-bar .bottom-menu, .bottom-bar .phone-number{
    display:none;
    white-space:nowrap;
    justify-content:space-around;
  }
  .bottom-menu ul, .bottom-menu li{
    list-style:none;
    margin: auto 10% auto 0;
    padding: 10px 0;
  }

  @media screen and (min-width:850px){
    .bottom-bar{
      display:flex;
      align-items:center;
      align-content:stretch;
      max-width:100%;
    }
    .bottom-right{
      margin: auto auto auto 0  ;
      overflow:hidden;
      display: flex;
      padding: 0 20px;
      text-align:center;
      align-items:center;
      width: 100%;
      justify-content: space-between;
    }
    .bottom-bar .bottom-menu {
      display: flex;
      justify-content: center;
      padding-top: 20px;
      padding-bottom: 20px;
    }
    .bottom-bar .phone-number{
      display: flex;
      align-content:flex-end;
      align-items:flex-end;
    }
    .bottom-menu > .flex-menu{
      justify-content:center;
      width:100%;
    }
    .bottom-menu > .flex-menu a{
      color:$blue;
    }
    .menu-item-has-children > .submenu{
      position: absolute;
      height:0;
      overflow:hidden;
      opacity:0;
      transition:all .5s ease-in-out;
    }
    .phone-number a{
      text-decoration:none;
      width:100%;
      font-weight:bold;
      font-size:35px;
      color:$red;
      margin-top:-3px;
    }
    .bottom-menu ul, .bottom-menu li{
      list-style:none;
      margin: auto;
      padding: 10px 0 5px;
    }
    .bottom-menu > .flex-menu{
      flex-wrap:wrap;
      padding:10px;
    }
    .bottom-menu > .flex-menu a{
      text-decoration:none;
      text-align:center;
      transition: all 300ms ease;
    }
    .bottom-menu > .flex-menu a:hover{
      color: $red;
      transition: all 300ms ease;
    }
    .bottom-menu > .flex-menu li{
      flex: 1 1 130px;
    }
  }

</style>
