<template>
  <section id="reviews-section" class="reviews-section container">
    <h2>Our Reviews </h2>
    <div class="nn-review-cont" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
      <hr style="margin-top: 0px; margin-bottom: 1.5em;">
      <div class="nn-reviews">
        <template v-for="review in reviews">
          <div class="nn-review">
            <div class="nn-review-header">
              <div class="nn-review-map-cont">
                <img class="nn-review-map" :alt="'Map of '+review.city+', '+review.state" :src="'https://maps.googleapis.com/maps/api/staticmap?center='+review.lat+','+review.lon+'&amp;key=AIzaSyCh495yf-2f3Rv050AxAt7KwCjBnuhNIrM&amp;zoom=12&amp;markers=color:blue|'+review.lat+','+review.lon+'&amp;size=200x125&amp;style=feature:road|element:labels|visibility:off'">
              </div>
              <h3 itemprop="name">{{ review.summary }}</h3>
              <h4>
          <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
            <span itemprop="name">{{ review.author }}</span> -
            <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
              <span itemprop="addressLocality">{{ review.city }}</span>,
              <span itemprop="addressRegion">{{ review.state }}</span>
            </span>
          </span> <time itemprop="datePublished" :datetime="review.date">{{ review.date }}</time>
              </h4><br/>
              <p class="nn-review-body" itemprop="description">
                {{ review.detail }}
              </p><br/>
              <div style="clear: both;"></div>
            </div>
            <div class="nn-review-footer">
              <div class="nn-review-rating-cat nn-review-rating-cat-overall">
                <div class="nn-review-star-wrapper">
                  <img :alt="review.overallRating+'-star rating'" :src="'https://d2gwjd5chbpgug.cloudfront.net/v2/images/stars-'+review.overallRating+'.png'">
                  <span itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">Overall Experience
              <span itemprop="ratingValue">{{ review.overallRating }}</span> /
              <span itemprop="bestRating">{{ bestRating(review.price,review.quality,review.convenience) }}</span>
            </span>
                </div>
                <div style="clear: both; ">
                </div>
              </div>
              <div class="nn-review-rating-cat">
                <div class="nn-review-star-wrapper">
                  <img :alt="review.quality+'-star rating'" :src="'https://d2gwjd5chbpgug.cloudfront.net/v2/images/stars-'+review.quality+'.png'"> <span>Quality</span></div>
                <div style="clear: both; ">
                </div>
              </div>
              <div class="nn-review-rating-cat">
                <div class="nn-review-star-wrapper">
                  <img :alt="review.price+'-star rating'" :src="'https://d2gwjd5chbpgug.cloudfront.net/v2/images/stars-'+review.price+'.png'"> <span>Price</span></div>
              </div>
              <div style="clear: both; "></div>
            </div>
            <div class="nn-review-rating-cat">
              <div class="nn-review-star-wrapper">
                <img :alt="review.convenience+'-star rating'" :src="'https://d2gwjd5chbpgug.cloudfront.net/v2/images/stars-'+review.convenience+'.png'"> <span>Convenience</span> </div>
            </div>
            <div style="clear: both; "></div>
          </div>
        </template>
      </div>

    </div>
  </section>
</template>
<script>
  import axios from 'axios';

  const reviewsArr = []
  axios.get('https://rooter-inc.com/dev/nn_reviews/')
    .then(function(res) {
      var i = 1;
      for (const key in res.data){
        if( i <= 10){
          reviewsArr.push(res.data[key])
          i++;
        }else{
          break;
        }

      }
    })
    .catch(e => {
      context.error(e)
    })
  export default {
    name: 'RooterRatings',
    data: () => {
      return {
        reviews: reviewsArr
      }
    },
    methods:{
      bestRating: (price, quality, convenience) =>{
        if(price > quality && price > convenience){
          return price;
        }else if(quality > price && quality > convenience){
          return quality;
        }else if(price < convenience && quality < convenience){
          return convenience
        }else{
          return 5
        }
      }
    }
  };
</script>
<style scoped type="css/sass">
  .reviews-section{
    padding:2em;
  }
  .nn-reviews{
    display:grid;
    grid-template-columns:1fr;
    grid-gap:1em;
  }
  time{
    color:$red;
    font-style:italic;
  }
  .nn-review{
    border:2px solid #191058;
    padding:1em;
    background:white;
  }
  .nn-review h3{
    margin-bottom:0;
  }
  .nn-review-map{
    text-align:center;
    margin:auto;
  }
  .nn-review-body{
    font-size:18px;
  }
  @media screen and (min-width:768px){
    .nn-reviews{
      grid-template-columns:1fr 1fr;
    }
    .nn-review{
      padding:1em;
    }
  }
  @media screen and (min-width:1140px){
    .nn-reviews, hr{
      max-width:1140px;
      margin:auto;
    }
  }
</style>
