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
		<section id="landing-page" class="content-wrapper">
			<h1>Your {{ county }} {{ city }}, {{ state }} Sewer & Drains Contractor</h1>
			<h2>{{ city }}, {{ state }} Sewer & Drains, Sewer and Drain Repair</h2>
			<p> When it comes
				to your sewer and drains you can count on Rooter to handle
				of them if they become plugged or need to be repaired or cleaned.
				Your Sewer & drain lines should be vented properly, be free of any obstacles that
				could cause them to clog and positioned to have the proper slope for drainage.
				Call today to schedule an appointment
				for {{ city }}, {{ state }} Drain Cleaning and sewer services.</p>

			<h2>Modern Plumbing Technology</h2>
			<p>Advances in technology for plumbing has made it faster to clean, repair
				or replace your sewer & drain lines to keep things flowing.
				We use cutting edge equipment to in order to
				clean, service and repair your plumbing</p>

			<h2>Locating & Identifying Problems</h2>
			<p>Even without being able to see your underground plumbing
				lines, it's still easy for us to to find common problems in {{ city }}, {{ state }} such as - broken, corroded or bellied
				pipes; obstacle blockage; damaged joints; or tree roots. With a camera inspection we can get
				through the lines and identify the cause of the problem.</p>

			<h2>Leaks</h2>
			<p>A sign of a bad drain line is a leak. A leak can lead to major problems
				in {{ city }}, {{ state }} if not taken care of in a timely fashion. A leak can take
				over destroy anywhere from entire rooms to making a home uninhabitable.
				If you have a leak don't wait give us a call now. <a href='tel:+18474261122' title='Call Now'>(847)426-1122 </a></p>

			<h2>Storm Drains</h2>
			<p>Our storm drain system is designed to guide any excess rain and ground
				water safely away from your property. Clogged or damaged storm drain
				pipes should be fixed as soon as possible in order to prevent any water
				damage that could potentially harm your {{ city }}, {{ state }} property in the event of rain.</p>

			<h2>Trenchless Sewer Repair In {{ city }}, {{ state }}</h2>
			<p>Sometimes digging through your yard or driveway isn't the best choice of
				action. In situations it's most beneficial trenchless sewer repair may be
				your best choice. In some cases we
				can repair your plumbing without affecting your property.</p>

			<h2>Benefits of Drain Cleaning</h2>
			<p>Having your sewer and drain lines cleaned on a regular basis will
				prevent future clogs from occurring and save you money and a whole
				lot of time. If you have tree roots issue in your sewer line and
				let it become clogged every time before having it cleared, the risk
				of potential damage to your {{ city }}, {{ state }} property from sewer backup would be
				significantly higher.</p>

			<h2>Hydro Jetting Plumbing Services In {{ city }}, {{ state }}</h2>
			<p>Hydro jetting is the newest way to unclog plumbing lines. It is
				used by plumbers to eliminate those nasty clogs that other drain
				cleaning machines cannot cut through. For serious clogs, this is
				the answer to your plumbing nightmare.</p>

			<h2>Cons of Using Drain Cleaners</h2>
			<p>Clogs can be very frustrating; especially when they back up into
				the bathroom and shower. It can be a real pain in the neck. Most
				people grab a bottle of drain cleaner and expect that to take care
				of their clog, but in actuality a drain cleaner can do more harm than good.</p>

			<p>If your sewer and drains need to be serviced, don't hesitate to call
				our {{ city }}, {{ state }} plumbers. We're the plumbing contractors that the
				{{ city }}, {{ state }} area calls when they are in need of help.</p>
		</section>
		</main>
	</section>
</template>
<script>
	import RooterHero from '@/components/RooterHero/'
import RooterServices from '@/components/RooterServices/'
import RooterWhyUs from '@/components/RooterWhyUs/'
export default {
		data: function() {
			return {
				slug: "sewer-and-drains-contractor-hickory-hills-il",
				city: "Hickory Hills",
				state: "IL",
				county: "Cook",
				zip: "60457",
				lon: "-87.8282",
				lat: "41.7252",
				hero:{
					heroImage:'background-image:url(/hero-house.jpg)',
					heroTitle: 'Dependable ChicagoLand',
					heroBigText: 'Plumbers',
					heroText: 'When it comes to great service for your plumbing and sewer needs you can count on Rooter Inc!',
					heroLink: '/contact',
					heroLinkTitle: 'Go To Contact Page',
					heroLinkText: 'Contact Us'
				}
			}
		},
components:{
RooterHero,
RooterServices,
RooterWhyUs
},
		head() {
			return{
				title: "Sewer and Drains Contractor in Cook County Hickory Hills, IL",
				meta:[
					{ hid: 'description', name: 'description', content: "Sewer and Drains Plumbing Company With Hickory Hills, IL Emergency Services Available" },
				]
			}
		}
	}
</script>
<style scoped>
</style>
