<template>
  <section class="reviews-section">
    <h2>Our Reviews </h2>
    <div class="nn-review-cont" itemprop="review" itemscope="" itemtype="http://schema.org/Review">
      <hr style="margin-top: 0px; margin-bottom: 1.5em;">
      <div class="nn-review-header">
        <div class="nn-review-map-cont" style="display: none;">
          <img class="nn-review-map" alt="Map of Aurora, IL" src="https://maps.googleapis.com/maps/api/staticmap?center=41.76,-88.26&amp;key=AIzaSyCh495yf-2f3Rv050AxAt7KwCjBnuhNIrM&amp;zoom=12&amp;markers=color:blue|41.76,-88.26&amp;size=200x125&amp;style=feature:road|element:labels|visibility:off">
        </div>
        <h3 itemprop="name">Great attempt</h3><br>
        <h4>
          <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
            <span itemprop="name">Rachel</span> -
            <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
              <span itemprop="addressLocality">Aurora</span>,
              <span itemprop="addressRegion">IL</span>
            </span>
          </span><br>
          <time itemprop="datePublished" datetime="2019-01-28T00:25:27.5500000">13 days ago</time>
        </h4><br>
        <p class="nn-review-body" itemprop="description">
          Keith was so nice and polite. I sincerely appreciate all the time and effort he put into attempting to unclog my tub drain. Eventhough he tried multiple different things, he was not able to clear it. However the service Keith provided was top-notch😉. Thank you Keith, you deserve a raise for all of the hard work.
        </p>
        <div style="clear: both;"></div>
      </div>
      <div class="nn-review-footer">
        <div class="nn-review-rating-cat nn-review-rating-cat-overall">
          <div class="nn-review-star-wrapper">
            <img alt="5-star overall rating" src="https://d2gwjd5chbpgug.cloudfront.net/v2/images/stars-5.png">
          </div>
          <div class="nn-review-rating-cat-name">
            <span itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">Overall Experience
              <span itemprop="ratingValue">5</span> /
              <span itemprop="bestRating">5</span>
            </span> </div> <div style="clear: both; ">
        </div>
        </div>
        <div class="nn-review-rating-cat">
          <div class="nn-review-star-wrapper">
            <img alt="5-star rating" src="https://d2gwjd5chbpgug.cloudfront.net/v2/images/stars-5.png"> </div>
          <div class="nn-review-rating-cat-name">
            <span>Quality</span>
          </div>
          <div style="clear: both; ">
          </div>
        </div>
        <div class="nn-review-rating-cat">
          <div class="nn-review-star-wrapper">
            <img alt="2-star rating" src="https://d2gwjd5chbpgug.cloudfront.net/v2/images/stars-2.png">
          </div>
          <div class="nn-review-rating-cat-name">
            <span>Price</span>
          </div>
          <div style="clear: both; "></div>
        </div>
        <div class="nn-review-rating-cat">
          <div class="nn-review-star-wrapper">
            <img alt="5-star rating" src="https://d2gwjd5chbpgug.cloudfront.net/v2/images/stars-5.png">
          </div> <div class="nn-review-rating-cat-name">
          <span>Convenience</span>
        </div>
          <div style="clear: both; "></div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
  export default {
    name: 'RooterRatings',
    asyncData(context, callback){
      callback(null,{
        reviews:$axios.$get('https://rooter-inc.com/dev/nn_reviews/')
      })
    }
  };
</script>
<style scoped type="css/sass">
</style>
