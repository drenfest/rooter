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
	<section id="residential-and-commercial-plumbing" class="content-wrapper">
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
				pageName: "residential-and-commercial-plumbing",
				pageTitle: "Residential and Commercial Plumbing",
				content: `<h1>Residential and Commercial Plumbing</h1>



<h2>The Drain & Sewer Pros</h2>
<p>
When you need a fast, on-time drain or sewer service, you can count on the professionals from Rooter, Inc.  From blocked drains to sewer replacements, Rooter, Inc. offers 24/7 emergency service.
</p>
<h2>DRAIN AND SEWER SERVICES INCLUDE:</h2>

<h2>MAIN SEWER LINE REPAIRS:</h2> <p>If you're
main sewer line, aka, mainline is clogged,
has collapsed or is leaking, we can perform
an inspection of the latest sewer camera
equipment. Once diagnosed we can offer you
repair and replacement solutions for your
    mainline and/or sewer clean-out.</p>

<h2>KITCHEN DRAINS:</h2>
<p>As soap and debris build up in your kitchen sink drain, it begins to drain slower and slower and eventually becomes blocked. We have the experience and technology to diagnose and unblock your kitchen sink drain.
</p>
<h2>BATHROOM SNK DRAINS:</h2> <p>Hair, soap, toothpaste, and debris will cause your bathroom sink to drain slowly and eventually clog completely. Rooter, Inc. is able to clear the clog and repipe your drain line if needed.
</p>
<h2>SHOWER AND TUB DRAINS:</h2> <p>Hair and soap
can cause shower and tub drains to become
clogged. If you see standing water in your
shower or if your bathtub is draining slowly,
you need the assistance of a trained Rooter,
Inc. professional. Our technicians will properly
diagnose the cause of the clog and will provide
you with alternatives to correct the problem.
</p>
<h2>TOILET DRAINS:</h2> <p>Toilets can become clogged with toilet paper, baby wipes and debris. Rooter, Inc. technicians will solve the problem by either augering or rodding the toilet drain, whichever best suits the situation.
</p>
<h2>FLOOR DRAINS:</h2> <p>Floor drains, most commonly located in basements, garages and laundry rooms can become clogged with dirt and debris. Rooter, Inc. technicians can cable the line to clear the clog.
</p>
<h2>STORM AND OUTSIDE FLOOR DRAINS:</h2>
<p>Your patio, driveway or walkway may have a
floor drain or a storm drain that has become
clogged with dirt, leaves and debris. Rooter,
Inc. can clear the clog and diagnose and repair
any breaks in the drain line that could cause
future problems.</p>`,
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
