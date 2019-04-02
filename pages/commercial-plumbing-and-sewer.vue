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
	<section id="commercial-plumbing-and-sewer" class="content-wrapper">
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
				pageName: "commercial-plumbing-and-sewer",
				pageTitle: "Commercial Plumbing and Sewer",
				content: `<div class='subheader'>
<h1>Commercial Plumbing And Sewer</h1>
</div>

<h2 class='servicesub'>COMMERCIAL PLUMBING SERVICES INCLUDE:</h2>

<h2>COMMERCIAL PLUMBING REPAIRS:</h2>


<p>Rooter, Inc. specializes in Commercial Properties.  It does not matter if you are a single location, a franchise or have multiple locations - We can handle ALL of your sewer and plumbing needs.  Our technicians are skilled, qualified, knowledgeable and experienced to handle any problem that may arise in your business.  Whether you have a dripping faucet, a burst waterline or a sewer drainage problem, you can expect the utmost professionalism from our technicians.

Rooter, Inc. is the company to call for ANY commercial work including: plumbing, drain cleaning, high-pressure Hydro-Jetting services, waterline leaks or breaks, fixture mal-functions, sewer line repair or replacement, video inspection of sewer lines and locator services of sewer line problems.
</p>
    <h2>DRAINS & SEWERS:</h2>

<p>
Expert drain and sewer service including drain cleaning, sewer repair, tree root removal, new lines and city sewer connections.
</p>
        <h2>WATER HEATERS:</h2>

<p>
All water heater needs including repairs,
new water heaters and tankless water
heater installations.
</p>
            <h2>GAS PIPING:</h2>

<p>
All gas piping needs, including new
installations and new gas lines and gas
leak safety repairs.
</p>
                <h2>PIPE LEAKS AND REPAIRS:</h2>

<p>
From leak locating and detection to the repair and replacement of pipes, including full re-pipes, and frozen pipe issues.
</p>
                    <h2>HYDRO-JETTING:</h2>

<p>
    Commercial drain line cleaning of grease without excavation</p>`,
				head() {
					return{
						title: "this.pageTitle",
						meta:[
							{ hid: 'description', name: 'description', content: "" },
						]
					}
				},
			}
	}
	}
</script>
<style scoped>
</style>
