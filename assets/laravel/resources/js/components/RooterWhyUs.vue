<template>
  <section id="why-us-section">
    <h2>Why Choose Rooter Inc Plumbing</h2>
    <div class="row">
      <div class="left col-1-3">
        <h2><span class="small">Experienced</span><br><span class="bigger">Chicagoland</span><br><span class="biggest">Plumbers</span></h2>
        <a class="btn secondary" href="tel:+18474261122" title="Click Here To Call Now">Call A Plumbing Expert Now</a>
        <a class="btn secondary-pill" href="#reviews-section" title="Click Here To See Our Fantastic Reviews">Check Out Our Reviews</a>
      </div>
      <div class="middle col-1-3">
        <h3>We Are Experienced</h3>
        <ul>
          <li>With over <strong>50 years</strong> in the plumbing industry.</li>
          <li>We would like to say <strong>we've seen it all</strong>.</li>
          <li>Our trusted plumbers <strong>can handle any situation</strong>.</li>
          <li>Open <strong>24 hours a day 7 days a week</strong>.</li>
          <li>Top Notch <strong>Emergency Plumbing Services</strong>.</li>
          <li><strong>Same day service</strong> and always <strong>arrive on time</strong>.</li>
        </ul>

      </div>
      <div class="right col-1-3">
        <h3>Top Rated 5 Star Plumbers</h3>
        <ul>
          <li>Our <strong>5 star reviews</strong> from our customers are a testiment to our dedication, and satisfaction.</li>
          <li>There's absolutley no reason not to call on Rooter Inc.</li>
          <li>We offer <strong>free estimates</strong> to all our clients.</li>
        </ul>

      </div>
    </div>
    <!--<div class="row">-->
      <!--<h3>Get Your Plumbing Problems Fixed Right The First Time.</h3>-->
      <!--<p>As a homeowner or business, you can always trust Rooter, Inc. We provide the <strong>highest quality of service</strong> for all of your plumbing repair, replacement, or installation needs including:-->
         <!--drain cleaning, sewer, toilets, sinks, faucets,showers, bathtubs, disposers, dishwashers, water heaters, sump and ejector pumps, water lines and pipelines. Whether you have a problem with leaks, broken fixtures, clogs, slow drains or are in need of other repairs, replacements or installations of new equipment, <strong>we are here for YOU</strong>. <strong>We can service your entire home</strong> wherever you have plumbing or sewer components. bathrooms, kitchens, powder rooms, laundry areas, basements, utility areas, walls, floors and ceilings where waterlines and drain lines run, and your property which houses your main water service and main sewer line. We do it ALL. <strong>There is NO job too big or too small</strong>. AND, we offer <strong>FREE ESTIMATES</strong>.-->
      <!--</p>-->
    <!--</div>-->
  </section>




</template>
<script>
  export default {
    name:"RooterWhyUs",
    data: function(){
      return{

      }
    }
  }
</script>
<style scoped type="css/sass">
  #why-us-section{
    background-image:linear-gradient(#fffffa, $blue), url(../../assets/ruck-n-trailer.jpg);
    background-blend-mode: screen;
    padding: 1em;
    margin-bottom: 0;
    background-size:cover;
    background-attachment: fixed;
    background-repeat:no-repeat;
  }
  ul{
    list-style:none;
  }
  .left,.middle,.right{
    text-align:center;
    padding:1rem;
  }
  .left h2{
    padding-left:1rem;
  }
  .small{
    font-size:25px;
  }
  .bigger{
    font-size:30px;
  }
  .biggest{
    font-size:40px;
  }
  .secondary{
    background:$blue;
    border:2px solid $blue;
  }
  .secondary-pill{
    background:white;
    border:2px solid $blue;
    color:$blue;
  }
  .row{
    align-content:flex-start;
    align-items:flex-start;
  }
  .left .btn{
    margin:1em auto;
  }
  @media screen and (min-width:768px){
    .left .btn{
      margin-left:1em;
    }
    .left,.middle,.right{
      text-align:left;
    }
    .left h2{
      text-align:left;
    }
  }
</style>
