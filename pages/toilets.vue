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
	<section id="toilets" class="content-wrapper">
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
				pageName: "toilets",
				pageTitle: "Toilets",
				content: `<h1>Toilets</h1>



<h2>TOILET PLUMBING SERVICES INCLUDE:</h2>

<h2>TOILET REPAIRS:</h2><p> Rooter, Inc. can diagnose and
repair in the same day a leaking, non-functioning, or
running toilet.  Our technicians are prepared to take
care of your problem in the same visit in most cases.</p>

<h2>TOILET INSTALLATIONS:</h2> <p>If you are looking to replace
a toilet that is broken, old or want a more efficient toilet,
Rooter, Inc. can provide you with the knowledge for
choosing a new toilet and will install it for you along with
a new supply line and emergency shut-off valve.</p>

<h2>CLOGGED TOILETS:</h2> <p>Rooter, Inc. can fix a clogged toilet for you and get it back to flushing in no time.  Rooter, Inc. can also determine for you what has caused the clog and provide expertise and alternatives to make sure your drain continues to keep clear.

</p>
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
