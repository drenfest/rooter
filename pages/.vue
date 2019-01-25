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
				title: "Test Page",
				content: ``,
				description: ""
			}
	}
	}
</script>
<style scoped>
</style>
