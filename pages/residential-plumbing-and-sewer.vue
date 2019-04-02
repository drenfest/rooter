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
	<section id="residential-plumbing-and-sewer" class="content-wrapper">
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
				pageName: "residential-plumbing-and-sewer",
				pageTitle: "Residential Plumbing and Sewer",
				content: `<h1>Residential Plumbing and Sewer</h1>



<h2>RESIDENTIAL PLUMBING SERVICES INCLUDE:</h2>

<h2>RESIDENTIAL PLUMBING REPAIRS:</h2>

<p>As a Homeowner, you can always trust Rooter, Inc.
to provide the highest quality of service for all of your
repair, replacement, or installation needs including:
drain cleaning and sewer, toilets, sinks, faucets,
showers and bathtubs, disposers, dishwashers, water
heaters, sump and ejector pumps, water lines and
pipelines.</p>

<p>Whether you have a problem with leaks, broken
fixtures, clogs, slow drains, broken fixtures or are
in need of other repairs, replacements or installations of new equipment, we are here for YOU.  We can service your entire home wherever you have plumbing or sewer components - bathrooms, kitchens, powder rooms, laundry areas, basements, utility areas, the walls, floors and ceilings where water lines and drain lines run, and your property which houses your main water service and main sewer line - We do it ALL.  There is NO job too big or too small.  AND, we offer FREE ESTIMATES.
</p>
<p>Throughout your kitchen, bathrooms, and
home including the repair or installation of
faucets, toilets, showers, tubs, sinks, laundry
tubs, dishwashers, garbage disposal systems,
and ice makers. Rooter, Inc. can also assist with
remodels, moving the location of sinks and
toilets, and new water lines.
</p>
<h2>DRAINS & SEWERS:</h2>

<p>Expert drain and sewer service including drain cleaning, sewer repair, tree root removal, new lines and city sewer connections.</p>

<h2>WATER HEATERS:</h2>

<p>All water heater needs including repairs, new
water heaters and tankless water heater installations.</p>

<h2>GAS PIPING:</h2>

<p>All gas piping needs, including new installations
and new gas lines and gas leak safety repairs.</p>

<h2>PIPE LEAKS AND REPAIRS:</h2>

<p>From leak locating and detection to the repair and replacement of pipes, including full repipes, and frozen pipe issues.</p>`,
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
