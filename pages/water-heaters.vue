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
	<section id="water-heaters" class="content-wrapper">
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
				pageName: "water-heaters",
				pageTitle: "Water Heaters",
				content: `<h1>Water Heaters</h1>
<h2>SAME DAY HOT WATER:</h2><p> We can help with all of your water heater needs today.</p>

<h2>FAST REPAIRS:</h2><p> If your water heater is faulty or leaking, Rooter, Inc. can help with a speedy response to repair your system today.</p>

<h2>SAVE ON NEW WATER HEATERS:</h2><p> If it's a
new water heater you're looking for or need,
Rooter, Inc. can provide advice on
choosing the best heater for your home,
lifestyle and budget. We can perform a
complete installation and will take your old
water heater away...for no additional charge!
</p>
<h2>WATER HEATER PROFESSIONALS:</h2><p> Rooter, Inc. is fully licensed for all your plumbing needs. As the the trusted choice in tens of thousands of Illinois homes for their hot water needs, you can be sure we will provide fast, professional and expert help.

ENERGY SAVINGS:</h2> <p>You can lower your
energy costs by choosing a newer, more
efficient hot water tank. Rooter, Inc. can also
educate you on and install the latest hot water
technology - tankless water heaters and
re-circulation systems.
</p>
<h2>INDUSTRY LEADING WARRANTIES:</h2> <p>You
can be sure you will benefit from excellent
warranties on your new water heater - the best
warranties in the industry.
</p>
<h2>WATER HEATER SERVICE:</h2> <p>Properly
maintaining your system with regular service
can help protect against rust and faulty safety valves which can cause costly floods inside your home.
</p>
<h2>FLAT-RATE PRICING:</h2> <p>Benefit from our flat rate pricing, as well as our discounts and promotions.  We will provide you with a free estimate before any work is started and the price will be the same no matter how long the job takes.
</p>`,
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
