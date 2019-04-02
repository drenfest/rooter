<template>
  <section id="page">
    <rooter-hero
      :heroImage="hero.heroImage"
      :heroTitle="hero.heroTitle"
      :heroBigText= "hero.heroBigText"
      :heroText= "hero.heroText"
      :heroLink= "hero.heroLink"
      :heroLinkTitle= "hero.heroLinkTitle"
      :heroLinkText="hero.heroLinkText"></rooter-hero>
    <rooter-services></rooter-services>
    <rooter-why-us></rooter-why-us>
    <main id="content-section">
	<section id="plumbing-and-sewer-specialists" class="content-wrapper">
		<div v-html="content"></div>
	</section>
    </main>
  </section>
</template>
<script>
import RooterHero from '@/components/RooterHero/'
import RooterServices from '@/components/RooterServices/'
import RooterWhyUs from '@/components/RooterWhyUs/'
export default {
  components: {
    RooterHero,
    RooterServices,
    RooterWhyUs,
  },
		data: function() {
			return {
        hero:{
          heroImage:'background-image:url(/hero-house.jpg)',
          heroTitle: 'Dependable ChicagoLand',
          heroBigText: 'Plumbers',
          heroText: 'When it comes to great service for your plumbing and sewer needs you can count on Rooter Inc!',
          heroLink: '/contact',
          heroLinkTitle: 'Go To Contact Page',
          heroLinkText: 'Contact Us'
        },
				pageName: "plumbing-and-sewer-specialists",
				pageTitle: "Plumbing and Sewer Specialists",
				content: `<div class='container'>
<div class='row1'>
<div class='col-xs-12 col-sm-6'></div>
<div class='col-xs-12 col-sm-6'>
<div class='get-a-free-quote'>
<h2>GET A <strong>FREE</strong> QUOTE</h2>
<h3 style='color:white;'>Our Knowledgeable and helpful staff are here for you!</h3>
[contact-form-7 id='737' title='Contact form homepage']

</div>
<div class='clear'></div>
</div>
</div>
<div class='row2'>
<div class='col-xs-12 col-sm-4'>
<h2>Sewer &amp; Plumbing

THE HELPFUL, AFFORDABLE PLUMBER</h2>
When it comes to great service for your plumbing and sewer needs across the NW Chicago suburbs, you can count on the professionalism and value you recieve from Rooter, Inc.

</div>
<div class='col-xs-12 col-sm-4'><img alt='Rooter Truck' src='/wp-content/uploads/2017/06/truck.png'/></div>
<div class='col-xs-12 col-sm-4'>

Rooter, Inc. is a family owned and operated sewer and plumbing company and has over 50 years combined experience in the plumbing and sewer industry. We strive for your satisfaction and provide the highest quality and workmanship in the market. We understand that without you, we would not be in business. We pride ourselves in customer satisfaction. We are fully licensed and insured for all of your plumbing needs.

</div>
<div class='clear'></div>
</div>
<div class='row3'>
<h2>WE CAN OPEN YOUR DRAIN LINE <span class='red-words'>CALL NOW <a href='tel:+18474261122'>(847)426-1122</a></span></h2>
</div>
<div class='row4'>
<div class='col-xs-12 col-sm-8'>
<div class='col-sm-4 col-xs-12'><img alt='Faucet Icon' src='/wp-content/uploads/2017/06/faucet.png'/></div>
<div class='col-sm-8 col-xs-12'>
<h3>Plumbing</h3>
Rooter, Inc. can take care of all your plumbing needs. From leaking faucets and shower valves to broken or frozen pipes to water heater replacement to sump pumps and sewage pumps to gas line services, we are Chicagoland's #1 choice for licensed, insured and bonded plumbers.

</div>
<div class='col-sm-4 col-xs-12'><img alt='Trap Icon' src='/wp-content/uploads/2017/06/trap.png'/></div>
<div class='col-sm-8 col-xs-12'>
<h3>Sewer</h3>
With our state of the art sewer equipment, Rooter, Inc. can take care of all your sewer needs.  Clogged sinks, tubs/showers, toilets and mainlines are no match for us with sewer rodding.  We can even use a sewer camera to inspect your sewer line to determine if you have a bigger problem on your hands.

</div>
<div class='col-sm-4 col-xs-12'><img alt='Wrench Icon' src='/wp-content/uploads/2017/06/wrench.png'/></div>
<div class='col-sm-8 col-xs-12'>
<h3>Emergency Service</h3>
With Rooter, Inc., our technicians are available 24/7/365 and will be there on-time, at the time most convenient for you.  You will always speak to a live Rooter, Inc. employee no matter when you call us.

</div>
<div class='col-sm-4 col-xs-12'><img alt='Broke Pipe Icon' src='/wp-content/uploads/2017/06/broke-pipe.png'/></div>
<div class='col-sm-8 col-xs-12'>
<h3>Water Damage</h3>
Rooter, Inc. is qualified and experienced to handle all of your water and sewer damage.  Our professional techs will properly get your home or office back in order.ou call us.

</div>
</div>
<div class='col-xs-12 col-sm-4'>
<h4>TOP-NOTCH TECHNOLOGY</h4>
With our state of the art sewer equipment, Rooter, Inc. can take care of all your sewer needs. Clogged sinks, bathtubs, showers, toilets, and mainlines are no match for us with sewer rodding. We can even use a sewer camera to inspect your sewer line to determine if you have a bigger problem on your hands.
<h4>SATISFACTION GUARANTEED</h4>
Rooter, Inc. technicians take the time to answer all of your questions and help with your needs. Our technicians are clean-cut, presentable and will clean up the work area after completing a job.
<h4>FLAT-RATE PRICING</h4>
With our up-front, flat-rate pricing we tell you the full price in advance before we start, giving you peace of mind. No extra work will be done without your approval.
<h4>FREE ESTIMATES</h4>
Rooter, Inc. offers free estimates. We will provide a verbal estimate at no charge when we visit your home or business.
<div class='clear'></div>
</div>
<div class='clear'></div>
</div>
[serviceareareviewcombo city='' state='' checkincount='10' reviewcount='10' zoomlevel='9']

</div>`,
				head() {
					return{
						title: "this.pageTitle",
						meta:[
							{ hid: 'description', name: 'description', content: "" },
						]
					}
				}
			}
	}
	}
</script>
<style scoped>
</style>
