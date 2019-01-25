<template>
	<section id="gas-pipes" class="content-wrapper">
		<div v-html="content"></div>
	</section>
</template>
<script>
	export default {
		data: function(){
			return {
				pageName: "gas-pipes",
				pageTitle: "Gas Pipes",
				content: `<h1>Gas Pipes</h1>


<h2>GAS PIPE SERVICES INCLUDE:</h2>

<h2>GAS LEAK REPAIRS:</h2> <p>If you suspect a gas leak, please call from a cell phone or a neighbors phone, outside in a well-ventilated area.  Rooter, Inc. can diagnose and
repair a gas leak inside or outside your home.</p>

<h2>GAS LINE INSTALLATIONS:</h2> <p>If you are looking to run
a new gas line for an outdoor stove, firepit, or grill, our
trained and licensed technicians will professionally
install your new gas line.</p>

<h2>GAS SAFETY INSPECTIONS:</h2><p> Rooter, Inc. can inspect
your current gas line to make sure it is up to code and
is safe for you to use any gas appliance in your home
or business.</p>


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
