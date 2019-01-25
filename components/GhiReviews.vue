<template>
  <div class="reviews">
    <svg id="county-map" width="210mm" height="297mm" version="1.1" viewBox="0 0 210 297"
      xmlns="http://www.w3.org/2000/svg">
      <path class="kenosha svg-path" transform="translate(-6.2924 10.697)"
        d="m98.901-9.9191v17.864h-15.834l0.40601 36.54h79.171l-1.624-16.646 2.03-10.556-4.06-8.1201v-8.9321l4.06-9.7441z"
        fill="none" marker-start="url(#marker4865-8)" stroke="#000" stroke-width=".52917"/>
      <text id="text-kenosha" class="kenosha svg-text" x="92.090332" y="32.085213" fill="#000000" font-family="sans-serif" font-size="10.999px"
        letter-spacing="0px" stroke-width=".27498" word-spacing="0px" style="line-height:1.25" xml:space="preserve"><tspan x="92.090332" y="32.085213" stroke-width=".27498">KENOSHA</tspan></text>
      <path class="lake svg-path" transform="translate(-6.2924 10.697)"
        d="m162.4 47.759-1.341 20.036-3.1413 7.1816-1.5706 13.985 5.4972 21.167 8.2459 11.339-73.428 2e-5v-73.708z"
        fill="none" stroke="#000" stroke-width=".52917"/>
      <text id="text-lake" class="lake svg-text" x="109.12949" y="99.333344" fill="#000000" font-family="sans-serif" font-size="10.999px"
        letter-spacing="0px" stroke-width=".27498" word-spacing="0px"
        style="font-feature-settings:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;line-height:1.25"
        xml:space="preserve"><tspan x="109.12949" y="99.333344">LAKE</tspan></text>
      <path class="mchenry svg-path" transform="translate(-6.2924 10.697)" d="m15.343 47.759 0.36036 73.708h76.757v-73.708z" fill="none"
        stroke="#000" stroke-width=".52917"/>
      <text id="text-mchenry" class="mchenry svg-text" x="18.396587" y="99.154831" fill="#000000" font-family="sans-serif" font-size="10.999px"
        letter-spacing="0px" stroke-width=".27498" word-spacing="0px"
        style="font-feature-settings:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;line-height:1.25"
        xml:space="preserve"><tspan x="18.396587" y="99.154831">MCHENRY</tspan></text>
      <path class="kane svg-path" transform="translate(-6.2924 10.697)" d="m43.652 202.26h44.687v-62.537h4.3008v-15.009h-46.695v16.63h-2.2211z"
        fill="none" stroke="#000" stroke-width=".52917"/>
      <text id="text-kane" class="kane svg-text" x="42.409657" y="179.56645" fill="#000000" font-family="sans-serif" font-size="10.999px"
        letter-spacing="0px" stroke-width=".27498" word-spacing="0px"
        style="font-feature-settings:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;line-height:1.25"
        xml:space="preserve"><tspan x="42.409657" y="179.56645">KANE</tspan></text>
      <path class="dupage svg-path" transform="translate(-6.2924 10.697)" d="m128.07 222.93h10.603l6.7156-6.0667v-53.589h-54.078v51.567h36.759z"
        fill="none" stroke="#000" stroke-width=".52917"/>
      <text id="text-dupage" class="dupage svg-text" x="88.973221" y="204.73595" fill="#000000" font-family="sans-serif" font-size="10.999px"
        letter-spacing="0px" stroke-width=".27498" word-spacing="0px"
        style="font-feature-settings:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;line-height:1.25"
        xml:space="preserve"><tspan x="88.973221" y="204.73595">DUPAGE</tspan></text>
      <path id="cook" class="cook svg-path" transform="translate(-6.2924 10.697)"
        d="m185.36 140.67 6.8036 25.324 4.9137 11.339-0.37797 11.339 8.3155 15.119 6.8036 7.9375v60.476h-41.955v-20.411h-19.655v-17.387h-18.899v-8.3155h10.961l6.9926-6.9926v-59.153h-57.641v-16.631h4.5357v-18.143l77.107 1.1e-4z"
        fill="none" stroke="#000" stroke-width=".52917"/>
      <text id="text-cook" class="cook svg-text" x="160.07703" y="234.3101" fill="#000000" font-family="sans-serif" font-size="10.999px"
        letter-spacing="0px" stroke-width=".27498" word-spacing="0px"
        style="font-feature-settings:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;line-height:1.25"
        xml:space="preserve"><tspan x="160.07703" y="234.3101">COOK</tspan></text>
    </svg>
  </div>
</template>
<script>
  export default {
    name: 'GhiReviews'
  }
</script>
<style scoped>
  svg .svg-text:hover, svg path:hover {
    transform: translateX(0) translateY(0px);
    transition: all 1s ease-out;
  }
</style>
