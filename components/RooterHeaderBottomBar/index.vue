<template>

	<div class="bottom-bar">
    <div class="logo-offset"></div>
    <div class="bottom-right">
      <nav class="bottom-menu">
        <ul class="flex-menu">
            <template v-for="dd of routes">
              <li class="menu-item menu-item-has-children">
              <a href.prevent="#" :title="dd.title">{{ dd.title }}</a>
              <ul class="submenu">
                <template v-for="child of dd.children">
                  <li class="menu-item">
                    <nuxt-link :to="child.path" :title="child.title">{{ child.text }}</nuxt-link>
                  </li>
                </template>
              </ul>
          </li>
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
          path: '/about-us',
          text: 'About Us',
          title: 'About Rooter Inc'
        },
        {
          id: 2,
          path: '/guarantee',
          text: 'Guarantee',
          title: 'Rooter Incs Guarantee'
        },
        {
          id: 3,
          path: '/plumbing',
          text: 'Plumbing',
          title: 'Read More About Our Plumbing Installation &amp; Repair Services'
        },
        {
          id: 4,
          path: '/commercial-plumbing',
          text: 'Commercial',
          title: 'See A List Of Rooter Incs Commercial Services'
        },
        {
          id: 5,
          path: '/residential-plumbing',
          text: 'Residential',
          title: 'See Our Residential Plumbing List'
        }
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

<style scoped>
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
    .logo-offset{
      width:300px;
    }
    .bottom-bar{
      display:flex;
      justify-content:space-around;
      align-items:center;
      align-content:stretch;
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
      display: inline-flex;
      justify-content: flex-start;
    }
    .bottom-bar .phone-number{
      display: inline-flex;
      align-content:flex-end;
      align-items:flex-end;
    }
    .bottom-menu > .flex-menu{
      justify-content:flex-start;
      width:100%;
    }
    .bottom-menu > .flex-menu a{
      color:#365DAB;
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
      color:#C24127;
      margin-top:-3px;
    }
  }

</style>
