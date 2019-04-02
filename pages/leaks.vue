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
	<section id="leaks" class="content-wrapper">
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
				pageName: "leaks",
				pageTitle: "Leaks",
				content: `<h1>Leaks</h1>


<h2>LEAK REPAIR AND DETECTION SERVICES INCLUDE:</h2>

<h2>LEAK DETECTION AND REPAIRS:</h2><p> If you're experiencing water leaks, noticing wetness in your ceiling, wall, floor or even in your yard or under concrete, Rooter, Inc.'s state of the art leak detection services can pinpoint where your leak is coming from and perform all repairs.</p>

<h2>FROZEN PIPES AND BURST WATERLINES:</h2> <p>If you have a frozen pipe or had a frozen pipe that has now burst, Rooter, Inc. is qualified to thaw your waterlines or repair the broken line.</p>

<h2>COPPER REPIPES:</h2> <p>If your waterline is damaged and needs to be replaced, Rooter, Inc. can replace your lines.  Whether you have corroded galvanized waterlines, a lead water service or damaged copper, your best bet may be to partially or fully replace the line with copper.</p>

<h2>LOW WATER PRESSURE ISSUES:</h2> <p>If your home has corroded waterlines, you may be experiencing low water pressure from your sinks and/or shower.  Rooter, Inc. will perform diagnostics and provide you with the best solution to fix your low water pressure problem.</p>

<h2>LEAKING TOILETS:</h2> <p>A leaking toilet can go undetected for many months raising water bills and causing extensive damage to your home.  Rooter, Inc. can diagnose the exact source of the leak and repair it.  We will also provide reputable companies to you if any flooring or walls are damaged or if any potentially hazardous mold has to be removed.</p>


`,
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
