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
	<section id="guarantee" class="content-wrapper">
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
				pageName: "guarantee",
				pageTitle: "Guarantee",
				content: `<h1>Plumbing and Sewer Guarantee</h1>



<h2>SATISFACTION GUARANTEED</h2>
SERVICE:</h2> <p>Rooter, Inc. will exceed your
expectations with the level of service we
will provide to you.</p>

<h2>SAME DAY SERVICE:</h2> <p>We are a 24/7
emergency company who will be at your
home within 2 hours in most cases.  We
are here when you need service the most.</p>

<h2>ON-TIME:</h2> <p>Your Rooter, Inc. technician
will be on-time, every time.</p>

<h2>PROFESSIONAL:</h2> <p>Rooter, Inc. is fully
licensed and insured for all of your sewer
and plumbing needs.</p>

<h2>TRUSTED:</h2><p> Rooter, Inc. performs complete background checks on every employee so you can trust whoever you deal with.  We have a zero-tolerance policy for any behaviors that could potentially jeopardize the well-being of our customers or the reputation of Rooter, Inc.</p>

    <h2>ONE STEP ABOVE:</h2> <p>Our technicians are
friendly, hygienic and professional.  We will
always clean up after ourselves, leaving the
work area clean.</p>

    <h2>FLAT-RATE PRICING:</h2> <p>With Rooter, Inc. you
know the full price up-front with our flat-rate policy
which means you pay the same, no matter how
long the job takes.  Additional work will only be done
after your approval.</p>

<p>24 HOUR, 7 DAY SUPPORT: Our phone lines are open 24 hours, 7 days a week, 365 days a year and are answered by a live Rooter, Inc. employee every time.  You can be sure that from the first time you call, you will be greeted with friendliness, professionalism, understanding, and knowledge.  Every member of our office staff either currently or has previously worked in the plumbing and sewer industry, meaning you can be sure that whoever you speak with, will provide you with proper and helpful information.</p>

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
