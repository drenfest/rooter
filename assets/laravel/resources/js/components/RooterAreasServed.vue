<template>
  <section id="areas-served-section" class="section">
    <header class="areas-served-header">
      <h2 class="primary-txt text-center">Areas Served</h2>
      <span class="water-drop">
        <span class="water-drop-gleam"></span>
      </span>
      <p>Rooter Inc. has you covered with the vast service area we cover. <br>
        <span class="bold-text">Select the county below to see the communities we service
         as well as the reviews in that selected region.</span>
      </p>
    </header>
    <div class="row">
      <div id="lpages" class="map-section">
        <ul>
          <template v-for="aItem of lpages">
              <li v-show="showCounty === aItem.county || showCounty === ''">
                <nuxt-link :class="'lpage-link-'+aItem.county+' lpage'" :to="'/areas-served/sewer-and-drains-contractor-'+aItem.id+'#content-section'" :title="aItem.city">{{ aItem.city }}, {{ aItem.state }}</nuxt-link>
              </li>
          </template>
        </ul>
      </div>
      <div class="map-section">
        <svg id="county-map" width="100%" height="100%" version="1.1" viewBox="0 0 210 297" xmlns="http://www.w3.org/2000/svg">
          <path  class="kenosha svg-path" transform="translate(-6.2924 10.697)"
            d="m98.901-9.9191v17.864h-15.834l0.40601 36.54h79.171l-1.624-16.646 2.03-10.556-4.06-8.1201v-8.9321l4.06-9.7441z"
            fill="none" marker-start="url(#marker4865-8)" stroke="$blue" stroke-width=".52917"/>
          <text id="text-kenosha" @click="getAreaByCounty('KENOSHA')" class="kenosha svg-text" x="92.090332" y="32.085213" fill="$blue" font-family="sans-serif"
            font-size="10.999px"
            letter-spacing="0px" stroke-width=".27498" word-spacing="0px" style="line-height:1.25" xml:space="preserve"><tspan x="92.090332" y="32.085213" stroke-width=".27498">KENOSHA</tspan></text>

          <path class="lake svg-path" transform="translate(-6.2924 10.697)"
            d="m162.4 47.759-1.341 20.036-3.1413 7.1816-1.5706 13.985 5.4972 21.167 8.2459 11.339-73.428 2e-5v-73.708z"
            fill="none" stroke="$blue" stroke-width=".52917"/>
          <text id="text-lake" @click="getAreaByCounty('LAKE')" class="lake svg-text" x="109.12949" y="99.333344" fill="$blue" font-family="sans-serif"
            font-size="10.999px"
            letter-spacing="0px" stroke-width=".27498" word-spacing="0px"
            style="font-feature-settings:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;line-height:1.25"
            xml:space="preserve"><tspan x="109.12949" y="99.333344">LAKE</tspan></text>

          <path  class="mchenry svg-path" transform="translate(-6.2924 10.697)" d="m15.343 47.759 0.36036 73.708h76.757v-73.708z"
            fill="none"
            stroke="$blue" stroke-width=".52917"/>
          <text id="text-mchenry" @click="getAreaByCounty('MCHENRY')" class="mchenry svg-text" x="18.396587" y="99.154831" fill="$blue" font-family="sans-serif"
            font-size="10.999px"
            letter-spacing="0px" stroke-width=".27498" word-spacing="0px"
            style="font-feature-settings:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;line-height:1.25"
            xml:space="preserve"><tspan x="18.396587" y="99.154831">MCHENRY</tspan></text>

          <path  class="kane svg-path" transform="translate(-6.2924 10.697)"
            d="m43.652 202.26h44.687v-62.537h4.3008v-15.009h-46.695v16.63h-2.2211z"
            fill="none" stroke="$blue" stroke-width=".52917"/>
          <text id="text-kane" @click="getAreaByCounty('KANE')" class="kane svg-text" x="42.409657" y="179.56645" fill="$blue" font-family="sans-serif"
            font-size="10.999px"
            letter-spacing="0px" stroke-width=".27498" word-spacing="0px"
            style="font-feature-settings:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;line-height:1.25"
            xml:space="preserve"><tspan x="42.409657" y="179.56645">KANE</tspan></text>

          <path  class="dupage svg-path" transform="translate(-6.2924 10.697)"
            d="m128.07 222.93h10.603l6.7156-6.0667v-53.589h-54.078v51.567h36.759z"
            fill="none" stroke="$blue" stroke-width=".52917"/>
          <text id="text-dupage" @click="getAreaByCounty('DUPAGE')" class="dupage svg-text" x="88.973221" y="204.73595" fill="$blue" font-family="sans-serif"
            font-size="10.999px"
            letter-spacing="0px" stroke-width=".27498" word-spacing="0px"
            style="font-feature-settings:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;line-height:1.25"
            xml:space="preserve"><tspan x="88.973221" y="204.73595">DUPAGE</tspan></text>

          <path id="cook" class="cook svg-path" transform="translate(-6.2924 10.697)"
            d="m185.36 140.67 6.8036 25.324 4.9137 11.339-0.37797 11.339 8.3155 15.119 6.8036 7.9375v60.476h-41.955v-20.411h-19.655v-17.387h-18.899v-8.3155h10.961l6.9926-6.9926v-59.153h-57.641v-16.631h4.5357v-18.143l77.107 1.1e-4z"
            fill="none" stroke="$blue" stroke-width=".52917"/>
          <text id="text-cook"  @click="getAreaByCounty('COOK')" class="cook svg-text" x="160.07703" y="234.3101" fill="$blue" font-family="sans-serif"
            font-size="10.999px"
            letter-spacing="0px" stroke-width=".27498" word-spacing="0px"
            style="font-feature-settings:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-variant-numeric:normal;line-height:1.25"
            xml:space="preserve"><tspan x="160.07703" y="234.3101">COOK</tspan></text>
        </svg>
      </div>
    </div>
  </section>
</template>

<script>
	export default {
	  name: 'RooterAreasServed',
    data: function(){
	    return {
	      showCounty:"",
        lpages: [
          {
            id: "addison-il",
            city: "ADDISON",
            state: "IL",
            county: "DUPAGE",
            zip: 60101,
            lon: -88.0048,
            lat: 41.9324,
            link:""
          },
          {
            id: "algonquin-il",
            city: "ALGONQUIN",
            state: "IL",
            county: "MCHENRY",
            zip: 60102,
            lon: -88.3187,
            lat: 42.1708,
            link:""
          },
          {
            id: "antioch-il",
            city: "ANTIOCH",
            state: "IL",
            county: "LAKE",
            zip: 60002,
            lon: -88.1074,
            lat: 42.4663,
            link:""
          },
          {
            id: "arlington-heights-il",
            city: "ARLINGTON HEIGHTS",
            state: "IL",
            county: "COOK",
            zip: 60004,
            lon: -87.9747,
            lat: 42.1085,
            link:""
          },
          {
            id: "aurora-il",
            city: "AURORA",
            state: "IL",
            county: "DUPAGE",
            zip: 60502,
            lon: -88.2513,
            lat: 41.7843,
            link:""
          },
          {
            id: "barrington-il",
            city: "BARRINGTON",
            state: "IL",
            county: "LAKE",
            zip: 60010,
            lon: -88.1346,
            lat: 42.1911,
            link:""
          },
          {
            id: "bartlett-il",
            city: "BARTLETT",
            state: "IL",
            county: "DUPAGE",
            zip: 60103,
            lon: -88.164,
            lat: 41.9667,
            link:""
          },
          {
            id: "bassett-wi",
            city: "BASSETT",
            state: "WI",
            county: "KENOSHA",
            zip: 53101,
            lon: -88.2277,
            lat: 42.5405,
            link:""
          },
          {
            id: "batavia-il",
            city: "BATAVIA",
            state: "IL",
            county: "KANE",
            zip: 60510,
            lon: -88.3095,
            lat: 41.8463,
            link:""
          },
          {
            id: "bedford-park-il",
            city: "BEDFORD PARK",
            state: "IL",
            county: "COOK",
            zip: 60499,
            lon: -87.7698,
            lat: 41.7836,
            link:""
          },
          {
            id: "bellwood-il",
            city: "BELLWOOD",
            state: "IL",
            county: "COOK",
            zip: 60104,
            lon: -87.8767,
            lat: 41.8821,
            link:""
          },
          {
            id: "benet-lake-wi",
            city: "BENET LAKE",
            state: "WI",
            county: "KENOSHA",
            zip: 53102,
            lon: -88.0773,
            lat: 42.5044,
            link:""
          },
          {
            id: "bensenville-il",
            city: "BENSENVILLE",
            state: "IL",
            county: "DUPAGE",
            zip: 60105,
            lon: -87.9445,
            lat: 41.9573,
            link:""
          },
          {
            id: "berkeley-il",
            city: "BERKELEY",
            state: "IL",
            county: "COOK",
            zip: 60163,
            lon: -87.9073,
            lat: 41.8827,
            link:""
          },
          {
            id: "berwyn-il",
            city: "BERWYN",
            state: "IL",
            county: "COOK",
            zip: 60402,
            lon: -87.7908,
            lat: 41.8334,
            link:""
          },
          {
            id: "bloomingdale-il",
            city: "BLOOMINGDALE",
            state: "IL",
            county: "DUPAGE",
            zip: 60108,
            lon: -88.0811,
            lat: 41.9493,
            link:""
          },
          {
            id: "bolingbrook-il",
            city: "BOLINGBROOK",
            state: "IL",
            county: "WILL",
            zip: 60440,
            lon: -88.0747,
            lat: 41.7051,
            link:""
          },
          {
            id: "bridgeview-il",
            city: "BRIDGEVIEW",
            state: "IL",
            county: "COOK",
            zip: 60455,
            lon: -87.8044,
            lat: 41.741,
            link:""
          },
          {
            id: "bristol-wi",
            city: "BRISTOL",
            state: "WI",
            county: "KENOSHA",
            zip: 53104,
            lon: -88.0438,
            lat: 42.5396,
            link:""
          },
          {
            id: "broadview-il",
            city: "BROADVIEW",
            state: "IL",
            county: "COOK",
            zip: 60155,
            lon: -87.8552,
            lat: 41.8567,
            link:""
          },
          {
            id: "brookfield-il",
            city: "BROOKFIELD",
            state: "IL",
            county: "COOK",
            zip: 60513,
            lon: -87.8475,
            lat: 41.8229,
            link:""
          },
          {
            id: "buffalo-grove-il",
            city: "BUFFALO GROVE",
            state: "IL",
            county: "LAKE",
            zip: 60089,
            lon: -87.9647,
            lat: 42.1743,
            link:""
          },
          {
            id: "burbank-il",
            city: "BURBANK",
            state: "IL",
            county: "COOK",
            zip: 60459,
            lon: -87.7698,
            lat: 41.7436,
            link:""
          },
          {
            id: "burlington-il",
            city: "BURLINGTON",
            state: "IL",
            county: "KANE",
            zip: 60109,
            lon: -88.5108,
            lat: 42.0646,
            link:""
          },
          {
            id: "camp-lake-wi",
            city: "CAMP LAKE",
            state: "WI",
            county: "KENOSHA",
            zip: 53109,
            lon: -88.1417,
            lat: 42.5385,
            link:""
          },
          {
            id: "carol-stream-il",
            city: "CAROL STREAM",
            state: "IL",
            county: "DUPAGE",
            zip: 60116,
            lon: -88.1357,
            lat: 41.9152,
            link:""
          },
          {
            id: "carpentersville-il",
            city: "CARPENTERSVILLE",
            state: "IL",
            county: "KANE",
            zip: 60110,
            lon: -88.268,
            lat: 42.1213,
            link:""
          },
          {
            id: "cary-il",
            city: "CARY",
            state: "IL",
            county: "MCHENRY",
            zip: 60013,
            lon: -88.2426,
            lat: 42.2171,
            link:""
          },
          {
            id: "chicago-il",
            city: "CHICAGO",
            state: "IL",
            county: "COOK",
            zip: 60290,
            lon: -87.8849,
            lat: 41.9614,
            link:""
          },
          {
            id: "chicago-ridge-il",
            city: "CHICAGO RIDGE",
            state: "IL",
            county: "COOK",
            zip: 60415,
            lon: -87.7771,
            lat: 41.7009,
            link:""
          },
          {
            id: "cicero-il",
            city: "CICERO",
            state: "IL",
            county: "COOK",
            zip: 60804,
            lon: -87.7598,
            lat: 41.8443,
            link:""
          },
          {
            id: "clarendon-hills-il",
            city: "CLARENDON HILLS",
            state: "IL",
            county: "DUPAGE",
            zip: 60514,
            lon: -87.9572,
            lat: 41.7725,
            link:""
          },
          {
            id: "crest-hill-il",
            city: "CREST HILL",
            state: "IL",
            county: "WILL",
            zip: 60403,
            lon: -87.7905,
            lat: 41.8397,
            link:""
          },
          {
            id: "crystal-lake-il",
            city: "CRYSTAL LAKE",
            state: "IL",
            county: "MCHENRY",
            zip: 60012,
            lon: -88.3042,
            lat: 42.27
          },
          {
            id: "darien-il",
            city: "DARIEN",
            state: "IL",
            county: "DUPAGE",
            zip: 60561,
            lon: -87.9772,
            lat: 41.747,
            link:""
          },
          {
            id: "deerfield-il",
            city: "DEERFIELD",
            state: "IL",
            county: "LAKE",
            zip: 60015,
            lon: -87.8738,
            lat: 42.1738,
            link:""
          },
          {
            id: "des-plaines-il",
            city: "DES PLAINES",
            state: "IL",
            county: "COOK",
            zip: 60016,
            lon: -87.8908,
            lat: 42.047,
            link:""
          },
          {
            id: "downers-grove-il",
            city: "DOWNERS GROVE",
            state: "IL",
            county: "DUPAGE",
            zip: 60515,
            lon: -88.0218,
            lat: 41.8075,
            link:""
          },
          {
            id: "dundee-il",
            city: "DUNDEE",
            state: "IL",
            county: "KANE",
            zip: 60118,
            lon: -88.2965,
            lat: 42.1103,
            link:""
          },
          {
            id: "elgin-il",
            city: "ELGIN",
            state: "IL",
            county: "KANE",
            zip: 60120,
            lon: -88.2826,
            lat: 42.0392,
            link:""
          },
          {
            id: "elk-grove-village-il",
            city: "ELK GROVE VILLAGE",
            state: "IL",
            county: "COOK",
            zip: 60007,
            lon: -88.0048,
            lat: 42.0067,
            link:""
          },
          {
            id: "elmhurst-il",
            city: "ELMHURST",
            state: "IL",
            county: "DUPAGE",
            zip: 60126,
            lon: -87.944,
            lat: 41.8929,
            link:""
          },
          {
            id: "elmwood-park-il",
            city: "ELMWOOD PARK",
            state: "IL",
            county: "COOK",
            zip: 60707,
            lon: -87.8165,
            lat: 41.9225,
            link:""
          },
          {
            id: "eola-il",
            city: "EOLA",
            state: "IL",
            county: "DUPAGE",
            zip: 60519,
            lon: -88.2423,
            lat: 41.7784,
            link:""
          },
          {
            id: "evanston-il",
            city: "EVANSTON",
            state: "IL",
            county: "COOK",
            zip: 60201,
            lon: -87.6997,
            lat: 42.0565,
            link:""
          },
          {
            id: "evergreen-park-il",
            city: "EVERGREEN PARK",
            state: "IL",
            county: "COOK",
            zip: 60805,
            lon: -87.7014,
            lat: 41.7229,
            link:""
          },
          {
            id: "forest-park-il",
            city: "FOREST PARK",
            state: "IL",
            county: "COOK",
            zip: 60130,
            lon: -87.8124,
            lat: 41.8726,
            link:""
          },
          {
            id: "fort-sheridan-il",
            city: "FORT SHERIDAN",
            state: "IL",
            county: "LAKE",
            zip: 60037,
            lon: -87.8066,
            lat: 42.2094,
            link:""
          },
          {
            id: "fox-lake-il",
            city: "FOX LAKE",
            state: "IL",
            county: "LAKE",
            zip: 60020,
            lon: -88.1746,
            lat: 42.392,
            link:""
          },
          {
            id: "fox-river-grove-il",
            city: "FOX RIVER GROVE",
            state: "IL",
            county: "MCHENRY",
            zip: 60021,
            lon: -88.2233,
            lat: 42.1909,
            link:""
          },
          {
            id: "fox-valley-il",
            city: "FOX VALLEY",
            state: "IL",
            county: "DUPAGE",
            zip: 60597,
            lon: -88.2494,
            lat: 41.7755,
            link:""
          },
          {
            id: "franklin-park-il",
            city: "FRANKLIN PARK",
            state: "IL",
            county: "COOK",
            zip: 60131,
            lon: -87.8764,
            lat: 41.9343,
            link:""
          },
          {
            id: "geneva-il",
            city: "GENEVA",
            state: "IL",
            county: "KANE",
            zip: 60134,
            lon: -88.3101,
            lat: 41.8859,
            link:""
          },
          {
            id: "gilberts-il",
            city: "GILBERTS",
            state: "IL",
            county: "KANE",
            zip: 60136,
            lon: -88.362,
            lat: 42.0924,
            link:""
          },
          {
            id: "glen-ellyn-il",
            city: "GLEN ELLYN",
            state: "IL",
            county: "DUPAGE",
            zip: 60137,
            lon: -88.0629,
            lat: 41.8713,
            link:""
          },
          {
            id: "glencoe-il",
            city: "GLENCOE",
            state: "IL",
            county: "COOK",
            zip: 60022,
            lon: -87.7617,
            lat: 42.1337,
            link:""
          },
          {
            id: "glendale-heights-il",
            city: "GLENDALE HEIGHTS",
            state: "IL",
            county: "DUPAGE",
            zip: 60139,
            lon: -88.0778,
            lat: 41.9196,
            link:""
          },
          {
            id: "glenview-il",
            city: "GLENVIEW",
            state: "IL",
            county: "COOK",
            zip: 60025,
            lon: -87.819,
            lat: 42.0756,
            link:""
          },
          {
            id: "golf-il",
            city: "GOLF",
            state: "IL",
            county: "COOK",
            zip: 60029,
            lon: -87.7913,
            lat: 42.0576,
            link:""
          },
          {
            id: "grayslake-il",
            city: "GRAYSLAKE",
            state: "IL",
            county: "LAKE",
            zip: 60030,
            lon: -88.0288,
            lat: 42.3359,
            link:""
          },
          {
            id: "great-lakes-il",
            city: "GREAT LAKES",
            state: "IL",
            county: "LAKE",
            zip: 60088,
            lon: -87.8525,
            lat: 42.3097,
            link:""
          },
          {
            id: "gurnee-il",
            city: "GURNEE",
            state: "IL",
            county: "LAKE",
            zip: 60031,
            lon: -87.9339,
            lat: 42.3743,
            link:""
          },
          {
            id: "hampshire-il",
            city: "HAMPSHIRE",
            state: "IL",
            county: "KANE",
            zip: 60140,
            lon: -88.5022,
            lat: 42.1165,
            link:""
          },
          {
            id: "hanover-park-il",
            city: "HANOVER PARK",
            state: "IL",
            county: "COOK",
            zip: 60133,
            lon: -88.164,
            lat: 41.9667,
            link:""
          },
          {
            id: "harwood-heights-il",
            city: "HARWOOD HEIGHTS",
            state: "IL",
            county: "COOK",
            zip: 60706,
            lon: -87.8166,
            lat: 41.9633,
            link:""
          },
          {
            id: "hickory-hills-il",
            city: "HICKORY HILLS",
            state: "IL",
            county: "COOK",
            zip: 60457,
            lon: -87.8282,
            lat: 41.7252,
            link:""
          },
          {
            id: "highland-park-il",
            city: "HIGHLAND PARK",
            state: "IL",
            county: "LAKE",
            zip: 60035,
            lon: -87.8063,
            lat: 42.1806,
            link:""
          },
          {
            id: "highwood-il",
            city: "HIGHWOOD",
            state: "IL",
            county: "LAKE",
            zip: 60040,
            lon: -87.8127,
            lat: 42.2024,
            link:""
          },
          {
            id: "hillside-il",
            city: "HILLSIDE",
            state: "IL",
            county: "COOK",
            zip: 60162,
            lon: -87.8983,
            lat: 41.8737,
            link:""
          },
          {
            id: "hines-il",
            city: "HINES",
            state: "IL",
            county: "COOK",
            zip: 60141,
            lon: -87.8313,
            lat: 41.855,
            link:""
          },
          {
            id: "hinsdale-il",
            city: "HINSDALE",
            state: "IL",
            county: "DUPAGE",
            zip: 60521,
            lon: -87.9481,
            lat: 41.7903,
            link:""
          },
          {
            id: "hoffman-estates-il",
            city: "HOFFMAN ESTATES",
            state: "IL",
            county: "COOK",
            zip: 60169,
            lon: -88.1258,
            lat: 42.0452,
            link:""
          },
          {
            id: "hometown-il",
            city: "HOMETOWN",
            state: "IL",
            county: "COOK",
            zip: 60456,
            lon: -87.7311,
            lat: 41.7314,
            link:""
          },
          {
            id: "huntley-il",
            city: "HUNTLEY",
            state: "IL",
            county: "MCHENRY",
            zip: 60142,
            lon: -88.4329,
            lat: 42.1889,
            link:""
          },
          {
            id: "ingleside-il",
            city: "INGLESIDE",
            state: "IL",
            county: "LAKE",
            zip: 60041,
            lon: -88.1632,
            lat: 42.3583,
            link:""
          },
          {
            id: "island-lake-il",
            city: "ISLAND LAKE",
            state: "IL",
            county: "LAKE",
            zip: 60042,
            lon: -88.2099,
            lat: 42.2789,
            link:""
          },
          {
            id: "itasca-il",
            city: "ITASCA",
            state: "IL",
            county: "DUPAGE",
            zip: 60143,
            lon: -88.018,
            lat: 41.9722,
            link:""
          },
          {
            id: "justice-il",
            city: "JUSTICE",
            state: "IL",
            county: "COOK",
            zip: 60458,
            lon: -87.8348,
            lat: 41.7445,
            link:""
          },
          {
            id: "kenilworth-il",
            city: "KENILWORTH",
            state: "IL",
            county: "COOK",
            zip: 60043,
            lon: -87.7151,
            lat: 42.0885,
            link:""
          },
          {
            id: "kenosha-wi",
            city: "KENOSHA",
            state: "WI",
            county: "KENOSHA",
            zip: 53140,
            lon: -87.8301,
            lat: 42.5812,
            link:""
          },
          {
            id: "la-grange-il",
            city: "LA GRANGE",
            state: "IL",
            county: "COOK",
            zip: 60525,
            lon: -87.8757,
            lat: 41.7952,
            link:""
          },
          {
            id: "la-grange-park-il",
            city: "LA GRANGE PARK",
            state: "IL",
            county: "COOK",
            zip: 60526,
            lon: -87.8737,
            lat: 41.8315,
            link:""
          },
          {
            id: "lafox-il",
            city: "LAFOX",
            state: "IL",
            county: "KANE",
            zip: 60147,
            lon: -88.431,
            lat: 41.8821,
            link:""
          },
          {
            id: "lake-bluff-il",
            city: "LAKE BLUFF",
            state: "IL",
            county: "LAKE",
            zip: 60044,
            lon: -87.8584,
            lat: 42.2837,
            link:""
          },
          {
            id: "lake-forest-il",
            city: "LAKE FOREST",
            state: "IL",
            county: "LAKE",
            zip: 60045,
            lon: -87.8692,
            lat: 42.2391,
            link:""
          },
          {
            id: "lake-in-the-hills-il",
            city: "LAKE IN THE HILLS",
            state: "IL",
            county: "MCHENRY",
            zip: 60156,
            lon: -88.3303,
            lat: 42.1817,
            link:""
          },
          {
            id: "lake-villa-il",
            city: "LAKE VILLA",
            state: "IL",
            county: "LAKE",
            zip: 60046,
            lon: -88.0646,
            lat: 42.4111,
            link:""
          },
          {
            id: "lake-zurich-il",
            city: "LAKE ZURICH",
            state: "IL",
            county: "LAKE",
            zip: 60047,
            lon: -88.058,
            lat: 42.1994,
            link:""
          },
          {
            id: "lemont-il",
            city: "LEMONT",
            state: "IL",
            county: "COOK",
            zip: 60439,
            lon: -88.0727,
            lat: 41.7026,
            link:""
          },
          {
            id: "libertyville-il",
            city: "LIBERTYVILLE",
            state: "IL",
            county: "LAKE",
            zip: 60048,
            lon: -87.952,
            lat: 42.2889,
            link:""
          },
          {
            id: "lincolnshire-il",
            city: "LINCOLNSHIRE",
            state: "IL",
            county: "LAKE",
            zip: 60069,
            lon: -87.9107,
            lat: 42.1945,
            link:""
          },
          {
            id: "lincolnwood-il",
            city: "LINCOLNWOOD",
            state: "IL",
            county: "COOK",
            zip: 60712,
            lon: -87.7361,
            lat: 42.006,
            link:""
          },
          {
            id: "lisle-il",
            city: "LISLE",
            state: "IL",
            county: "DUPAGE",
            zip: 60532,
            lon: -88.0757,
            lat: 41.7884,
            link:""
          },
          {
            id: "lombard-il",
            city: "LOMBARD",
            state: "IL",
            county: "DUPAGE",
            zip: 60148,
            lon: -88.0145,
            lat: 41.8737,
            link:""
          },
          {
            id: "long-grove-il",
            city: "LONG GROVE",
            state: "IL",
            county: "LAKE",
            zip: 60049,
            lon: -88.0028,
            lat: 42.1954,
            link:""
          },
          {
            id: "lyons-il",
            city: "LYONS",
            state: "IL",
            county: "COOK",
            zip: 60534,
            lon: -87.8222,
            lat: 41.8134,
            link:""
          },
          {
            id: "maywood-il",
            city: "MAYWOOD",
            state: "IL",
            county: "COOK",
            zip: 60153,
            lon: -87.8473,
            lat: 41.8721,
            link:""
          },
          {
            id: "mchenry-il",
            city: "MCHENRY",
            state: "IL",
            county: "MCHENRY",
            zip: 60050,
            lon: -88.2598,
            lat: 42.3474,
            link:""
          },
          {
            id: "medinah-il",
            city: "MEDINAH",
            state: "IL",
            county: "DUPAGE",
            zip: 60157,
            lon: -88.0472,
            lat: 41.9701,
            link:""
          },
          {
            id: "melrose-park-il",
            city: "MELROSE PARK",
            state: "IL",
            county: "COOK",
            zip: 60160,
            lon: -87.8618,
            lat: 41.9013,
            link:""
          },
          {
            id: "mooseheart-il",
            city: "MOOSEHEART",
            state: "IL",
            county: "KANE",
            zip: 60539,
            lon: -88.3347,
            lat: 41.8239,
            link:""
          },
          {
            id: "morton-grove-il",
            city: "MORTON GROVE",
            state: "IL",
            county: "COOK",
            zip: 60053,
            lon: -87.7928,
            lat: 42.0427,
            link:""
          },
          {
            id: "mount-prospect-il",
            city: "MOUNT PROSPECT",
            state: "IL",
            county: "COOK",
            zip: 60056,
            lon: -87.9335,
            lat: 42.0654,
            link:""
          },
          {
            id: "mundelein-il",
            city: "MUNDELEIN",
            state: "IL",
            county: "LAKE",
            zip: 60060,
            lon: -88.061,
            lat: 42.2689,
            link:""
          },
          {
            id: "naperville-il",
            city: "NAPERVILLE",
            state: "IL",
            county: "DUPAGE",
            zip: 60540,
            lon: -88.1472,
            lat: 41.7743,
            link:""
          },
          {
            id: "niles-il",
            city: "NILES",
            state: "IL",
            county: "COOK",
            zip: 60714,
            lon: -87.8126,
            lat: 42.0296,
            link:""
          },
          {
            id: "north-aurora-il",
            city: "NORTH AURORA",
            state: "IL",
            county: "KANE",
            zip: 60542,
            lon: -88.3264,
            lat: 41.8083,
            link:""
          },
          {
            id: "north-chicago-il",
            city: "NORTH CHICAGO",
            state: "IL",
            county: "LAKE",
            zip: 60064,
            lon: -87.8571,
            lat: 42.3255,
            link:""
          },
          {
            id: "northbrook-il",
            city: "NORTHBROOK",
            state: "IL",
            county: "COOK",
            zip: 60062,
            lon: -87.8439,
            lat: 42.125,
            link:""
          },
          {
            id: "oak-brook-il",
            city: "OAK BROOK",
            state: "IL",
            county: "DUPAGE",
            zip: 60523,
            lon: -87.9369,
            lat: 41.8008,
            link:""
          },
          {
            id: "oak-lawn-il",
            city: "OAK LAWN",
            state: "IL",
            county: "COOK",
            zip: 60453,
            lon: -87.7558,
            lat: 41.7155,
            link:""
          },
          {
            id: "oak-park-il",
            city: "OAK PARK",
            state: "IL",
            county: "COOK",
            zip: 60301,
            lon: -87.7996,
            lat: 41.8887,
            link:""
          },
          {
            id: "palatine-il",
            city: "PALATINE",
            state: "IL",
            county: "COOK",
            zip: 60038,
            lon: -88.012,
            lat: 42.0974,
            link:""
          },
          {
            id: "palos-hills-il",
            city: "PALOS HILLS",
            state: "IL",
            county: "COOK",
            zip: 60465,
            lon: -87.8284,
            lat: 41.7002,
            link:""
          },
          {
            id: "palos-park-il",
            city: "PALOS PARK",
            state: "IL",
            county: "COOK",
            zip: 60464,
            lon: -87.8588,
            lat: 41.6699,
            link:""
          },
          {
            id: "park-ridge-il",
            city: "PARK RIDGE",
            state: "IL",
            county: "COOK",
            zip: 60068,
            lon: -87.8286,
            lat: 41.9725,
            link:""
          },
          {
            id: "plato-center-il",
            city: "PLATO CENTER",
            state: "IL",
            county: "KANE",
            zip: 60170,
            lon: -88.2858,
            lat: 42.0384,
            link:""
          },
          {
            id: "pleasant-prairie-wi",
            city: "PLEASANT PRAIRIE",
            state: "WI",
            county: "KENOSHA",
            zip: 53158,
            lon: -87.9321,
            lat: 42.5504,
            link:""
          },
          {
            id: "prospect-heights-il",
            city: "PROSPECT HEIGHTS",
            state: "IL",
            county: "COOK",
            zip: 60070,
            lon: -87.9371,
            lat: 42.1047,
            link:""
          },
          {
            id: "richmond-il",
            city: "RICHMOND",
            state: "IL",
            county: "MCHENRY",
            zip: 60071,
            lon: -88.2911,
            lat: 42.4679,
            link:""
          },
          {
            id: "ringwood-il",
            city: "RINGWOOD",
            state: "IL",
            county: "MCHENRY",
            zip: 60072,
            lon: -88.2964,
            lat: 42.4082,
            link:""
          },
          {
            id: "river-forest-il",
            city: "RIVER FOREST",
            state: "IL",
            county: "COOK",
            zip: 60305,
            lon: -87.8171,
            lat: 41.8942,
            link:""
          },
          {
            id: "river-grove-il",
            city: "RIVER GROVE",
            state: "IL",
            county: "COOK",
            zip: 60171,
            lon: -87.8399,
            lat: 41.9269,
            link:""
          },
          {
            id: "riverside-il",
            city: "RIVERSIDE",
            state: "IL",
            county: "COOK",
            zip: 60546,
            lon: -87.8289,
            lat: 41.8345,
            link:""
          },
          {
            id: "rolling-meadows-il",
            city: "ROLLING MEADOWS",
            state: "IL",
            county: "COOK",
            zip: 60008,
            lon: -88.0287,
            lat: 42.0782,
            link:""
          },
          {
            id: "roselle-il",
            city: "ROSELLE",
            state: "IL",
            county: "DUPAGE",
            zip: 60172,
            lon: -88.0736,
            lat: 41.9776,
            link:""
          },
          {
            id: "round-lake-il",
            city: "ROUND LAKE",
            state: "IL",
            county: "LAKE",
            zip: 60073,
            lon: -88.0925,
            lat: 42.3518,
            link:""
          },
          {
            id: "russell-il",
            city: "RUSSELL",
            state: "IL",
            county: "LAKE",
            zip: 60075,
            lon: -87.9259,
            lat: 42.4894,
            link:""
          },
          {
            id: "saint-charles-il",
            city: "SAINT CHARLES",
            state: "IL",
            county: "KANE",
            zip: 60174,
            lon: -88.3038,
            lat: 41.9213,
            link:""
          },
          {
            id: "schaumburg-il",
            city: "SCHAUMBURG",
            state: "IL",
            county: "COOK",
            zip: 60159,
            lon: -88.0834,
            lat: 42.033,
            link:""
          },
          {
            id: "schiller-park-il",
            city: "SCHILLER PARK",
            state: "IL",
            county: "COOK",
            zip: 60176,
            lon: -87.8703,
            lat: 41.9572,
            link:""
          },
          {
            id: "shorewood-il",
            city: "SHOREWOOD",
            state: "IL",
            county: "WILL",
            zip: 60404,
            lon: -87.7896,
            lat: 41.8393,
            link:""
          },
          {
            id: "silver-lake-wi",
            city: "SILVER LAKE",
            state: "WI",
            county: "KENOSHA",
            zip: 53170,
            lon: -88.1702,
            lat: 42.5503,
            link:""
          },
          {
            id: "skokie-il",
            city: "SKOKIE",
            state: "IL",
            county: "COOK",
            zip: 60076,
            lon: -87.7307,
            lat: 42.0363,
            link:""
          },
          {
            id: "south-elgin-il",
            city: "SOUTH ELGIN",
            state: "IL",
            county: "KANE",
            zip: 60177,
            lon: -88.2951,
            lat: 41.9955,
            link:""
          },
          {
            id: "spring-grove-il",
            city: "SPRING GROVE",
            state: "IL",
            county: "MCHENRY",
            zip: 60081,
            lon: -88.2252,
            lat: 42.4398,
            link:""
          },
          {
            id: "stone-park-il",
            city: "STONE PARK",
            state: "IL",
            county: "COOK",
            zip: 60165,
            lon: -87.8567,
            lat: 41.9006,
            link:""
          },
          {
            id: "streamwood-il",
            city: "STREAMWOOD",
            state: "IL",
            county: "COOK",
            zip: 60107,
            lon: -88.1675,
            lat: 42.0225,
            link:""
          },
          {
            id: "summit-argo-il",
            city: "SUMMIT ARGO",
            state: "IL",
            county: "COOK",
            zip: 60501,
            lon: -87.8099,
            lat: 41.7834,
            link:""
          },
          {
            id: "techny-il",
            city: "TECHNY",
            state: "IL",
            county: "COOK",
            zip: 60082,
            lon: -87.8075,
            lat: 42.1097,
            link:""
          },
          {
            id: "trevor-wi",
            city: "TREVOR",
            state: "WI",
            county: "KENOSHA",
            zip: 53179,
            lon: -88.1325,
            lat: 42.5164,
            link:""
          },
          {
            id: "twin-lakes-wi",
            city: "TWIN LAKES",
            state: "WI",
            county: "KENOSHA",
            zip: 53181,
            lon: -88.2534,
            lat: 42.5213,
            link:""
          },
          {
            id: "union-il",
            city: "UNION",
            state: "IL",
            county: "MCHENRY",
            zip: 60180,
            lon: -88.5269,
            lat: 42.2234,
            link:""
          },
          {
            id: "vernon-hills-il",
            city: "VERNON HILLS",
            state: "IL",
            county: "LAKE",
            zip: 60061,
            lon: -87.972,
            lat: 42.2327,
            link:""
          },
          {
            id: "villa-park-il",
            city: "VILLA PARK",
            state: "IL",
            county: "DUPAGE",
            zip: 60181,
            lon: -87.9798,
            lat: 41.8787,
            link:""
          },
          {
            id: "wadsworth-il",
            city: "WADSWORTH",
            state: "IL",
            county: "LAKE",
            zip: 60083,
            lon: -87.9328,
            lat: 42.4298,
            link:""
          },
          {
            id: "warrenville-il",
            city: "WARRENVILLE",
            state: "IL",
            county: "DUPAGE",
            zip: 60555,
            lon: -88.1836,
            lat: 41.8226,
            link:""
          },
          {
            id: "wasco-il",
            city: "WASCO",
            state: "IL",
            county: "KANE",
            zip: 60183,
            lon: -88.4017,
            lat: 41.938,
            link:""
          },
          {
            id: "wauconda-il",
            city: "WAUCONDA",
            state: "IL",
            county: "LAKE",
            zip: 60084,
            lon: -88.1395,
            lat: 42.2634,
            link:""
          },
          {
            id: "waukegan-il",
            city: "WAUKEGAN",
            state: "IL",
            county: "LAKE",
            zip: 60079,
            lon: -87.868,
            lat: 42.3709,
            link:""
          },
          {
            id: "wayne-il",
            city: "WAYNE",
            state: "IL",
            county: "DUPAGE",
            zip: 60184,
            lon: -88.2324,
            lat: 41.9466,
            link:""
          },
          {
            id: "west-chicago-il",
            city: "WEST CHICAGO",
            state: "IL",
            county: "DUPAGE",
            zip: 60185,
            lon: -88.1988,
            lat: 41.8869,
            link:""
          },
          {
            id: "westchester-il",
            city: "WESTCHESTER",
            state: "IL",
            county: "COOK",
            zip: 60154,
            lon: -87.8855,
            lat: 41.8523,
            link:""
          },
          {
            id: "western-springs-il",
            city: "WESTERN SPRINGS",
            state: "IL",
            county: "COOK",
            zip: 60558,
            lon: -87.8999,
            lat: 41.8042,
            link:""
          },
          {
            id: "westmont-il",
            city: "WESTMONT",
            state: "IL",
            county: "DUPAGE",
            zip: 60559,
            lon: -87.9727,
            lat: 41.795,
            link:""
          },
          {
            id: "wheaton-il",
            city: "WHEATON",
            state: "IL",
            county: "DUPAGE",
            zip: 60187,
            lon: -88.1128,
            lat: 41.8608,
            link:""
          },
          {
            id: "willow-springs-il",
            city: "WILLOW SPRINGS",
            state: "IL",
            county: "COOK",
            zip: 60480,
            lon: -87.8768,
            lat: 41.7237,
            link:""
          },
          {
            id: "willowbrook-il",
            city: "WILLOWBROOK",
            state: "IL",
            county: "DUPAGE",
            zip: 60527,
            lon: -87.951,
            lat: 41.8418,
            link:""
          },
          {
            id: "wilmette-il",
            city: "WILMETTE",
            state: "IL",
            county: "COOK",
            zip: 60091,
            lon: -87.7294,
            lat: 42.0763,
            link:""
          },
          {
            id: "wilmot-wi",
            city: "WILMOT",
            state: "WI",
            county: "KENOSHA",
            zip: 53192,
            lon: -88.2115,
            lat: 42.512,
            link:""
          },
          {
            id: "winfield-il",
            city: "WINFIELD",
            state: "IL",
            county: "DUPAGE",
            zip: 60190,
            lon: -88.1525,
            lat: 41.8708,
            link:""
          },
          {
            id: "winnetka-il",
            city: "WINNETKA",
            state: "IL",
            county: "COOK",
            zip: 60093,
            lon: -87.7579,
            lat: 42.1031,
            link:""
          },
          {
            id: "winthrop-harbor-il",
            city: "WINTHROP HARBOR",
            state: "IL",
            county: "LAKE",
            zip: 60096,
            lon: -87.8283,
            lat: 42.4798,
            link:""
          },
          {
            id: "wonder-lake-il",
            city: "WONDER LAKE",
            state: "IL",
            county: "MCHENRY",
            zip: 60097,
            lon: -88.3563,
            lat: 42.3941,
            link:""
          },
          {
            id: "wood-dale-il",
            city: "WOOD DALE",
            state: "IL",
            county: "DUPAGE",
            zip: 60191,
            lon: -87.9782,
            lat: 41.9599,
            link:""
          },
          {
            id: "woodridge-il",
            city: "WOODRIDGE",
            state: "IL",
            county: "DUPAGE",
            zip: 60517,
            lon: -88.061,
            lat: 41.7542,
            link:""
          },
          {
            id: "woodstock-il",
            city: "WOODSTOCK",
            state: "IL",
            county: "MCHENRY",
            zip: 60098,
            lon: -88.4472,
            lat: 42.3204,
            link:""
          },
          {
            id: "woodworth-wi",
            city: "WOODWORTH",
            state: "WI",
            county: "KENOSHA",
            zip: 53194,
            lon: -88.072,
            lat: 42.5653,
            link:""
          },
          {
            id: "worth-il",
            city: "WORTH",
            state: "IL",
            county: "COOK",
            zip: 60482,
            lon: -87.7748,
            lat: 41.689,
            link:""
          },
          {
            id: "zion-il",
            city: "ZION",
            state: "IL",
            county: "LAKE",
            zip: 60099,
            lon: -87.8575,
            lat: 42.4513,
            link:""
          }
        ]
      }
    },
    methods:{
	    getAreaByCounty: function(selectedCounty){
	      this.showCounty = selectedCounty;
        },
      getCountyMapHeight: function(){
	      this.countyMapHeight = document.querySelector('#county-map').height();
      }
      }
	}
</script>

<style scoped type="css/sass">
  #areas-served-section p{
    text-align:center;
    margin:0 0 2rem;
  }
  svg > text:hover{
    cursor:pointer;
  }
  path{
    pointer-events:all;
  }
  .svg-path{
    transition:all 1s ease-out;
  }
  .svg-path:hover{
    fill:$red;
    transition:all 1s ease-out;
  }
  .svg-path:hover + text{
    fill:#ffffff;
  }
  #lpages{
    overflow-y: scroll;
    overflow-x: hidden;
    max-height: 460px;
  }
  .lpage{
    text-decoration:none;
    color:$blue;
    transition:all 500ms ease-out;
  }
  .lpage:hover{
    color:$red;
  }
  .map-section{
    width:50%;
  }
</style>
