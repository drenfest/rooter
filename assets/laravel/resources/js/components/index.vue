<template>
  <section id="specials-section">
    <h2 class="specials-title">
      Current Specials
    </h2>
    <div class="sboxes">
      <div v-for="sbox of sboxes" v-on:click="returnId(sbox.id)" :key="sbox.id" class="sbox">
        <div class="couponbottom">
          <h4>{{  sbox.sBMoney }}</h4>
          <p>{{  sbox.sBTitle }}</p>
          <p class="couponexpire">{{  sbox.sBExpires }}</p>
        </div>
      </div>
    </div>
    </section>
</template>
<script>
  export default {
    name: 'RooterSpecials',
    data () {
      return {
        specialsTitle: 'Coupons',
        sboxes: [
          {
            id: 1,
            sBAltText: 'truck logo',
            sBMoney: '$50 Off',
            sBTitle: 'HYDRO-JETTING',
            sBExpires: 'EXPIRES JANUARY 2019'
          },
          {
            id: 2,
            sBAltText: 'truck logo',
            sBMoney: '$50 Off',
            sBTitle: 'HYDRO-JETTING',
            sBExpires: 'EXPIRES JANUARY 2019'
          },
          {
            id: 3,
            sBAltText: 'truck logo',
            sBMoney: '$50 Off',
            sBTitle: 'HYDRO-JETTING',
            sBExpires: 'EXPIRES JANUARY 2019'
          }
        ]
      }
    },
    methods: {
      returnId: (id) => {
        console.log(id)
      }
    }
  }
</script>
<style scoped type="css/sass">
  body {
    font-family: 'Open Sans', sans-serif;
    color: #3b3b3b;
  }
  #specials-section{
    max-width:1140px;
    margin: 0 auto 3.5em;
  }
  .sboxes{
    display:flex;
    flex-wrap:wrap;
  }
  .sbox {
    margin: .5em;
    flex: 1 1 auto;
  }
  .coupontop {
    margin-bottom: 10px;
  }
  .coupontop img {
    max-width: 100%;
    -webkit-border-top-left-radius: 15px;
    -webkit-border-top-right-radius: 15px;
    -moz-border-radius-topleft: 15px;
    -moz-border-radius-topright: 15px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }
  .couponbottom {
    border: 2px dashed $blue;
    padding: 10px 20px 30px;
    border-radius: 15px;
  }
  .couponbottom h4 {
    text-align: center;
    font-weight: 800;
    font-size: 40px;
    line-height: 1;
    color: $blue;
    margin:0px;
    padding-bottom: 10px;
  }
  .couponbottom p {
    text-align: center;
    font-weight: 400;
    font-size: 24px;
    text-transform: uppercase;
    margin: 0px;
    padding-bottom: 3px;
  }
  p.couponexpire {
    font-size: 16px;
    color:$red;
  }
  @media screen and (min-width:768px){
    .sboxes{
      justify-content:space-between;
      flex-wrap:nowrap;
    }
  }
</style>
