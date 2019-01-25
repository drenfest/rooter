<template>
	<section id="" class="content-wrapper">
		<div v-html="content"></div>
	</section>
</template>
<script>
	export default {
		data: function(){
			return {
				pageName: "",
				pageTitle: "Test Page",
				content: ``,
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
