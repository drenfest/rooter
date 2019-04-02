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
	<section id="sump-pumps" class="content-wrapper">
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
				pageName: "sump-pumps",
				pageTitle: "Sump Pumps",
				content: `<h1>Sump Pumps</h1>


<h2>PUMP SERVICES INCLUDE:</h2>

<h2>SUMP PUMPS:</h2><p> A Sump Pump that is not properly
working or not working at all can cause your home
or business to flood, creating major damage.  Rooter,
Inc. can replace or repair your Sump Pump, Check
Valve, or the drainage line that goes from your pump to
the outside.</p>

<h2>SEWAGE PUMPS (EJECTOR </h2><p> A faulty or
broken Sewage Pump can not only cause damage to
your home or business but it can also cause unsafe
and unsanitary living or working conditions.  Rooter, Inc. can repair or replace your Sewage Pump, Check Valve or the drainage line that feeds from your Sewage Pump into your sewerline.</p>

<h2>BATTERY BACK-UP SUMP PUMP SYSTEM:</h2><p> Just because your sump pump is working properly does not mean you are not at risk of flooding.  Sump Pumps work off of power (electricity).  What happens when the power goes out??  Your sump pump does not turn on to do it's job.  A Battery Back-Up System is the only way to help prevent a flood from happening should you lose power.  Rooter, Inc. can test, repair, replace or install a new Battery Back-Up System for you to help ease your mind.</p>

<h2>FAST SAME DAY SERVICE:</h2><p> A down pump is nothing to put on hold.  Rooter, Inc. can come out on the same day and repair or replace your pump to prevent any unnecessary damage from occuring.</p>`,
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
