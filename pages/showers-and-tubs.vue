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
	<section id="showers-and-tubs" class="content-wrapper">
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
				pageName: "showers-and-tubs",
				pageTitle: "Showers and Tubs",
				content: `<h1>Showers and Tubs</h1>


<p>For expert service for all of your shower and tub
plumbing needs across the Chicagoland Area
you can count on Rooter, Inc.  From installing or
replacing units to fixing leaks or clogs, Rooter, Inc.
    is here for all your shower and tub plumbing and sewer needs.</p>

<h2>SHOWER AND TUB SERVICES INCLUDE:</h2>

<h2>NEW SHOWERS AND TUBS</h2>

<p>Rooter, Inc. can help you with the latest designs, and great workmanship to help upgrade your bathroom. We will help educate, advise and install the best showers and tubs for your home and budget.
</p>
<h2>SHOWER AND SINK CLOGS</h2>

<p>If your shower, sink or floor drain is clogged, Rooter, Inc. can unclog it today.  We will even provide advice on preventing future clogs.
</p>
<h2>LEAKING SHOWERS AND TUBS</h2>

<p>If your shower or tub is leaking, Rooter, Inc. will be able to diagnose and solve the problem in the same visit, in most cases.
</p>
<h2>LOW WATER PRESSURE</h2>

<p>If your shower or bathroom sink faucet is just a drizzle, Rooter, Inc. can diagnose the root of the problem.  We also have ways to help boost your water pressure for a shower you can enjoy.</p>`,
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
