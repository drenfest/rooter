<template>
  <div id="specials-section">
    <h3 class="specials-title">
      Current Specials
    </h3>
    <div class="row">
      <div v-for="sbox of sboxes" v-on:click="returnId(sbox.id)" :key="sbox.id" class="col-1-3 sbox">
        <div id="container">
          <div class="coupontop">
            <img :src="sbox.sBImage" :alt="sbox.sBAltText">
          </div>
          <div class="couponbottom">
            <h4>{{  sbox.sBMoney }}</h4>
            <p>{{  sbox.sBTitle }}</p>
            <p class="couponexpire">{{  sbox.sBExpires }}</p>
          </div>
        </div>
        </div>
      </div>
    </div>
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
            sBImage: '/truck-lineup.jpg',
            sBAltText: 'truck logo',
            sBMoney: '$50 Off',
            sBTitle: 'HYDRO-JETTING',
            sBExpires: 'EXPIRES JANUARY 2019'
          },
          {
            id: 2,
            sBImage: '/truck-lineup.jpg',
            sBAltText: 'truck logo',
            sBMoney: '$50 Off',
            sBTitle: 'HYDRO-JETTING',
            sBExpires: 'EXPIRES JANUARY 2019'
          },
          {
            id: 3,
            sBImage: '/truck-lineup.jpg',
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
<style scoped>
  body {
    font-family: 'Open Sans', sans-serif;
    color: #3b3b3b;
  }
  #container {
    max-width: 600px;
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
    border-left:    2px dashed #365dab;
    border-right:  2px dashed #365dab;
    border-bottom: 2px dashed #365dab;
    padding: 10px 20px 30px;
    -webkit-border-bottom-right-radius: 15px;
    -webkit-border-bottom-left-radius: 15px;
    -moz-border-radius-bottomright: 15px;
    -moz-border-radius-bottomleft: 15px;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 15px;
  }
  .couponbottom h4 {
    text-align: center;
    font-weight: 800;
    font-size: 60px;
    line-height: 1;
    color: #365dab;
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
    font-size: 18px;
  }
</style>
