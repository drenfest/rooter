<template>
	<section id="faucets-and-sinks" class="content-wrapper">
		<div v-html="content"></div>
	</section>
</template>
<script>
	export default {
		data: function(){
			return {
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
