<template>
  <section id="services-section" class="container">
    <h2>Our Services</h2>
    <div class="service-boxes-wrapper">
      <!--<div @click="moveLeft" class="prev-arrow arrow">-->
        <!--<svg width="25" height="50">-->
          <!--<polygon points="25,0 0,25 25,50" style="fill:#C24127;" />-->
        <!--</svg>-->
      <!--</div>-->
      <!--<div class="service-boxes" :style="{marginLeft:boxPosition+'px'}">-->
      <div class="service-boxes">
        <template v-for="route of routes">
          <nuxt-link class="service-box" :to="route.path+'#content-section'" :title="route.title">{{ route.text }}</nuxt-link>
        </template>
      </div>
      <!--<div @click="moveRight" class="next-arrow arrow">-->
        <!--<svg width="25" height="50">-->
          <!--<polygon points="0,0 0,50 25,25" style="fill:#C24127;" />-->
        <!--</svg>-->
      <!--</div>-->
    </div>
  </section>
</template>
<script>
  export default {
    name: 'RooterServices',
    data:function(){
        return{
          routes: [
          {
            id: 1,
            path: '/drain-cleaning',
            text: 'Drain Cleaning',
            title: 'Plumbing Service Drain Cleaning'
          },
          {
            id: 2,
            path: '/faucets-and-sinks',
            text: 'Faucets & Sinks',
            title: 'Plumbing Service Faucets & Sinks'
          },{
            id: 3,
            path: '/gas-pipes',
            text: 'Gas Pipes',
            title: 'Plumbing Service Gas Pipes'
          },{
            id: 4,
            path: '/leaks',
            text: 'Pipe Breaks & Leaks',
            title: 'Plumbing Service Pipe Breaks & Leaks'
          },{
            id: 5,
            path: '/sewage-pumps',
            text: 'Sewage Pumps',
            title: 'Plumbing Service Sewage Pumps'
          },{
            id: 6,
            path: '/showers-and-tubs',
            text: 'Showers & Tubs',
            title: 'Plumbing Service Showers & Tubs'
          },{
            id: 7,
            path: '/sump-pumps',
            text: 'Sump Pumps',
            title: 'Plumbing Service Sumps Pumps'
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
            title: 'Plumbing Service Water Heaters'
          }
        ],
        boxPosition:0,
      }
    },
    methods:{
      // moveLeft: function(){
      //   let boxPos = this.boxPosition;
      //   if (boxPos !== 0){
      //       this.boxPosition = this.boxPosition + 150
      //   }
      // },
      // moveRight: function(){
      //   if (this.boxPosition * -1 <= 150 * (this.routes.length - 1)){
      //       this.boxPosition = this.boxPosition - 150
      //   }
      // }
    }
  }
</script>
<style scoped>
  #services-section{
    position:relative;
  }
  /*.arrow{*/
    /*position:absolute;*/
    /*z-index:3;*/
    /*width: 50px;*/
    /*height: 50px;*/
    /*text-align:center;*/
  /*}*/
  /*.prev-arrow{*/
    /*left:-.8em;*/
    /*top:65px;*/
  /*}*/
  /*.next-arrow{*/
    /*right:-.8em;*/
    /*top:65px;*/
  /*}*/
  .service-boxes-wrapper{
    position:relative;
    overflow-x:hidden;
    background:white;
  }
  .service-boxes{
    position:relative;
    display:grid;
    grid-template-columns:1fr 1fr;
    grid-template-rows:1fr;
    align-content:center;
    align-items:center;
    transition:all 500ms ease-out;
    flex-wrap:wrap;
    margin:auto;
    justify-content:space-between;
    max-width:1140px;
    background:white;
    pointer-events:none;
  }
  .service-box{
    background: #365DAB;
    text-align: center;
    min-width: 150px;
    min-height: 150px;
    align-content: center;
    align-self: center;
    flex: 0 0 150px;
    justify-items: center;
    justify-content: center;
    display: flex;
    flex-direction: column;
    padding: .5em;
    position:relative;
    z-index:2;
    color:white;
    font-weight:bold;
    text-decoration:none;
    transition:all 500ms ease-in-out;
    border: 1em solid white;
  }
  .service-boxes > .service-box{
    pointer-events:auto;
  }
  .service-boxes:hover{
    background:url(~assets/images/calltoactionwide.jpg);
  }
  .service-boxes:hover > .service-box{
    background:rgba(255,255,255,.6);
    color:#365DAB;
  }
  .service-boxes:hover>.service-box:not(:hover){
    background:transparent;
    color:transparent;
  }
  @media screen and (min-width:768px){
    .service-boxes{
      grid-template-columns:1fr 1fr 1fr;
    }

  }
</style>
