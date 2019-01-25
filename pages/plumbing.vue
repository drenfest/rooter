<template>
	<section id="plumbing" class="content-wrapper">
		<div v-html="content"></div>
	</section>
</template>
<script>
	export default {
		data: function(){
			return {
				pageName: "plumbing",
				pageTitle: "Plumbing",
				content: `<h1>Plumbing</h1>



<h2>PLUMBING SERVICES INCLUDE:</h2>

<h2>RESIDENTIAL & COMMERCIAL PLUMBING REPAIRS:</h2>

<p>As a Homeowner or business owner, you can always
trust Rooter, Inc. to provide the highest quality of service
for all of your repair, replacement, or installation needs
including: drain cleaning and sewer, toilets, sinks, faucets,
showers and bathtubs, disposers, dishwashers, water
heaters, sump and ejector pumps, water lines and
    pipelines.

Whether you have a problem with leaks, broken
fixtures, clogs, slow drains, broken fixtures or are
in need of other repairs, replacements or installations of new equipment, we are here for YOU.  We can service your entire home wherever you have plumbing or sewer components - bathrooms, kitchens, powder rooms, laundry areas, basements, utility areas, the walls, floors and ceilings where waterlines and drain lines run, and your property which houses your main water service and main sewer line - We do it ALL.  There is NO job too big or too small.  AND, we offer FREE ESTIMATES.
</p>
<h2>DRAINS & SEWERS:</h2>

<p>Expert drain and sewer service including drain cleaning, sewer repair, tree root removal, new lines and city sewer connections.</p>

<h2>WATER HEATERS:</h2>

<p>All water heater needs including repairs,
new water heaters and tankless water
heater installations.
</p>
<h2>GAS PIPING:</h2>

<p>All gas piping needs, including new
installations and new gas lines and gas
leak safety repairs.
</p>
<h2>PIPE LEAKS AND REPAIRS:</h2>

<p>From leak locating and detection to the repair and replacement of pipes, including full repiping, and frozen pipe issues.</p>

<h2>WATER SOFTENING & PURIFICATION:</h2>

<p>Residential and commercial water quality solutions.</p>


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
