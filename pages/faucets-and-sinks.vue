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
	<section id="faucets-and-sinks" class="content-wrapper">
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
				pageName: "faucets-and-sinks",
				pageTitle: "Faucets and Sinks",
				content: `<h1>Faucet and Sinks </h1>

<h2>FAUCET AND SINK REPAIR S INCLUDE:</h2>

<p>Rooter, Inc. repairs, replaces and installs new sinks and faucets and all other components of the sink or faucet in all parts of your home including the kitchen, bathroom and laundry room.  Rooter, Inc. can also address leaking or broken hose bibs and wet bar areas.</p>

<h2>FAST FAUCET REPAIRS:</h2>

<p>If you have a faulty or leaky faucet, we can repair or replace it.  In most cases, we can take care of your problem in the same visit.</p>

<h2>NEW FAUCETS & SINKS:</h2>

<p>Rooter, Inc. provides the latest designs and the industry's leading warranties for your new faucets and sinks, all installed by a trained and professional technician.</p>

<h2>CLOGGED SINK DRAINS:</h2>

<p>Rooter, Inc. can help clear your clog, and get you up and running today.</p>

<h2>DISPOSALS:</h2>
<p>Rooter, Inc. can diagnose and either repair or replace your garbage disposal.  Sometimes disposals can become jammed, clogged or stop working...no matter what the situation, your trusted Rooter, Inc. technician will diagnose the problem and offer alternatives to repair or replace your garbage disposal.</p>

<h2>EXPERT SERVICE:</h2>

<p>Enjoy our great service and value (including up-front flat-rate pricing) from Rooter, Inc. technicians, your fully licensed and insured plumbing experts.</p>


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
