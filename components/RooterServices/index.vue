<template>
  <section id="services-section">
    <div id="DIV_2">
      <header id="HEADER_7">
        <h1 id="H1_8">
          {{ PAGES_DATA.title }}
        </h1>
      </header>
      <div id="DIV_3">
        <article id="ARTICLE_4">
          {{ $store.getters.PAGES_DATA.content.rendered }}
        </article>
        <aside id="ASIDE_21">
          <header id="HEADER_22">
            <h5 id="H5_23">
              Rooter Services
            </h5>
          </header>
          <ul id="UL_24">
            <li id="LI_25">
              <a href="/plumbing/" id="A_26"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_27" alt='' /> <strong id="STRONG_28">Plumbing</strong></a>
            </li>
            <li id="LI_29">
              <a href="/plumbing/boiler-plumbing/" id="A_30"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_31" alt='' /> <strong id="STRONG_32">Boiler Plumbing</strong></a>
            </li>
            <li id="LI_33">
              <a href="/plumbing/leak-detection-repair/" id="A_34"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_35" alt='' /> <strong id="STRONG_36">Leak Detection &amp; Repair</strong></a>
            </li>
            <li id="LI_37">
              <a href="/plumbing/slab-leaks/" id="A_38"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_39" alt='' /> <strong id="STRONG_40">Slab Leaks</strong></a>
            </li>
            <li id="LI_41">
              <a href="/plumbing/garbage-disposals/" id="A_42"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_43" alt='' /> <strong id="STRONG_44">Garbage Disposals</strong></a>
            </li>
            <li id="LI_45">
              <a href="/plumbing/water-heaters/" id="A_46"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_47" alt='' /> <strong id="STRONG_48">Water Heaters</strong></a>
            </li>
            <li id="LI_49">
              <a href="/water-damage-restoration/" id="A_50"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_51" alt='' /> <strong id="STRONG_52">Water Damage Restoration</strong></a>
            </li>
            <li id="LI_53">
              <a href="/drain-services/hydro-jetting/" id="A_54"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_55" alt='' /> <strong id="STRONG_56">Hydro Jetting</strong></a>
            </li>
            <li id="LI_57">
              <a href="/drain-services/drain-cleaning/" id="A_58"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_59" alt='' /> <strong id="STRONG_60">Drain Cleaning</strong></a>
            </li>
            <li id="LI_61">
              <a href="/sewer-services/" id="A_62"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_63" alt='' /> <strong id="STRONG_64">Sewer Services</strong></a>
            </li>
            <li id="LI_65">
              <a href="/sewer-services/trenchless-sewer-repair/" id="A_66"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_67" alt='' /> <strong id="STRONG_68">Trenchless Sewer Repair</strong></a>
            </li>
            <li id="LI_69">
              <a href="/sewer-services/septic-repair/" id="A_70"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" id="IMG_71" alt='' /> <strong id="STRONG_72">Septic Repairs</strong></a>
            </li>
          </ul>
        </aside>
      </div>
    </div>
  </section>
</template>
<script>
  export default {
    name: 'RooterServices',
    props: () => {
      return [
        {
          id: {type: String},
          date: {type: String},
          date_gmt: {type: String},
          guid: {
            rendered: {type: String}
          },
          modified: {type: String},
          modified_gmt: {type: String},
          slug: {type: String},
          status: {type: String},
          type: String,
          link: {type: String},
          title: {
            rendered: {type: String}
          },
          content: {
            rendered: {type: String},
            protected: {type: Boolean}
          },
          excerpt: {
            rendered: {type: String},
            protected: {type: Boolean}
          },
          author: {type: String},
          featured_media: {type: String},
          parent: {type: String},
          menu_order: {type: String},
          comment_status: {type: String},
          ping_status: {type: String},
          template: {type: String},
          meta: [],
          _links: {
            self: {type: Array},
            collection: {type: Array},
            about: {type: Array},
            author: {type: Array},
            replies: {type: Array},
            'version-history': {type: Array},
            'predecessor-version': {type: Array},
            'wp:attachment': {type: Array},
            curies: {type: Array}
          }
        }
      ]
    },
    data: () => {
      return {
      }
    },
    mounted () {
    }
  }
</script>
<style scoped>
  #services-section {
    background-position: 50% 50%;
    box-sizing: border-box;
    height: 990.719px;
    width: 100%;
    background: rgb(255, 255, 255) none no-repeat scroll 50% 50% / cover padding-box border-box;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    padding: 32.8372px 0px;
  }/*#services-section*/

  #services-section:after {
    box-sizing: border-box;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#services-section:after*/

  #services-section:before {
    box-sizing: border-box;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#services-section:before*/

  #DIV_2 {
    bottom: 0px;
    box-sizing: border-box;
    left: 0px;
    max-width: 100%;
    position: relative;
    right: 0px;
    top: 0px;
    width: 100%;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    margin: 0px auto;
    padding: 0px 49.7969px;
  }/*#DIV_2*/

  #DIV_2:after {
    box-sizing: border-box;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#DIV_2:after*/

  #DIV_2:before {
    box-sizing: border-box;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#DIV_2:before*/

  #DIV_3 {
    box-sizing: border-box;
    display: flex;
    width: 100%;
    align-items: center;
    justify-content: center;
    flex-flow: row wrap;
  }/*#DIV_3*/

  #ARTICLE_4 {
    box-sizing: border-box;
    height: auto;
    min-height: auto;
    min-width: auto;
    width: 508.797px;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#ARTICLE_4*/

  #ARTICLE_4:after {
    box-sizing: border-box;
    min-height: auto;
    min-width: auto;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#ARTICLE_4:after*/

  #ARTICLE_4:before {
    box-sizing: border-box;
    min-height: auto;
    min-width: auto;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }
  /*#ARTICLE_4:before*/
  #IMG_6 {
    background-position: 50% 50%;
    box-sizing: border-box;
    display: block;
    height: 152.625px;
    max-width: 100%;
    width: 508.797px;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/image-2.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    padding: 0px 0px 152.625px;
  }/*#IMG_6*/

  #IMG_6:after {
    box-sizing: border-box;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#IMG_6:after*/

  #IMG_6:before {
    box-sizing: border-box;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#IMG_6:before*/

  #HEADER_7 {
    box-sizing: border-box;
    text-align: center;
    padding: 0px 0px 13.1349px;
  }/*#HEADER_7*/

  #HEADER_7:after {
    box-sizing: border-box;
    text-align: left;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#HEADER_7:after*/

  #HEADER_7:before {
    box-sizing: border-box;
    text-align: left;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#HEADER_7:before*/

  #H1_8 {
    box-sizing: border-box;
    color: rgb(36, 36, 36);
    height: 86px;
    text-align: center;
    text-decoration: none solid rgb(36, 36, 36);
    column-rule-color: rgb(36, 36, 36);
    caret-color: rgb(36, 36, 36);
    border: 0px none rgb(36, 36, 36);
    font: normal normal 700 normal 36.4861px / 43.7833px "Fira Sans", sans-serif;
    margin: 0px;
    outline: rgb(36, 36, 36) none 0px;
  }/*#H1_8*/

  #H1_8:after {
    box-sizing: border-box;
    color: rgb(36, 36, 36);
    text-align: left;
    text-decoration: none solid rgb(36, 36, 36);
    column-rule-color: rgb(36, 36, 36);
    caret-color: rgb(36, 36, 36);
    border: 0px none rgb(36, 36, 36);
    font: normal normal 700 normal 36.4861px / 43.7833px "Fira Sans", sans-serif;
    outline: rgb(36, 36, 36) none 0px;
  }/*#H1_8:after*/

  #H1_8:before {
    box-sizing: border-box;
    color: rgb(36, 36, 36);
    text-align: left;
    text-decoration: none solid rgb(36, 36, 36);
    column-rule-color: rgb(36, 36, 36);
    caret-color: rgb(36, 36, 36);
    border: 0px none rgb(36, 36, 36);
    font: normal normal 700 normal 36.4861px / 43.7833px "Fira Sans", sans-serif;
    outline: rgb(36, 36, 36) none 0px;
  }/*#H1_8:before*/

  .DIV_9 {
    box-sizing: border-box;
    height: 617.156px;
    letter-spacing: 0.1px;
    width: 508.797px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
  }/*.DIV_9*/

  .DIV_9:after {
    box-sizing: border-box;
    letter-spacing: 0.1px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
  }/*.DIV_9:after*/

  .DIV_9:before {
    box-sizing: border-box;
    letter-spacing: 0.1px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
  }/*.DIV_9:before*/

  .H2_10 {
    box-sizing: border-box;
    color: #C24127;
    height: 66px;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    width: 508.797px;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 27.7278px / 33.2733px "Fira Sans", sans-serif;
    margin: 0px 0px 8.31833px;
    outline: #C24127 none 0px;
  }/*.H2_10*/

  .H2_10:after {
    box-sizing: border-box;
    color: #C24127;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 27.7278px / 33.2733px "Fira Sans", sans-serif;
    outline: #C24127 none 0px;
  }/*.H2_10:after*/

  .H2_10:before {
    box-sizing: border-box;
    color: #C24127;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 27.7278px / 33.2733px "Fira Sans", sans-serif;
    outline: #C24127 none 0px;
  }/*.H2_10:before*/

  .P_11 {
    box-sizing: border-box;
    height: 208px;
    letter-spacing: 0.1px;
    width: 508.797px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
    margin: 3.94047px 0px 13.1349px;
  }/*.P_11*/

  .P_11:after {
    box-sizing: border-box;
    letter-spacing: 0.1px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
  }/*.P_11:after*/

  .P_11:before {
    box-sizing: border-box;
    letter-spacing: 0.1px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
  }/*.P_11:before*/

  .A_12 {
    box-sizing: border-box;
    color: #C24127;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
    outline: #C24127 none 0px;
    transition: color 0.4s ease 0s;
  }/*.A_12*/

  .A_12:after {
    box-sizing: border-box;
    color: #C24127;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
    outline: #C24127 none 0px;
  }/*.A_12:after*/

  .A_12:before {
    box-sizing: border-box;
    color: #C24127;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
    outline: #C24127 none 0px;
  }/*.A_12:before*/

  .H3_13 {
    box-sizing: border-box;
    color: #C24127;
    height: 33px;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    width: 508.797px;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 27.7278px / 33.2733px "Fira Sans", sans-serif;
    margin: 18.023px 0px 8.31833px;
    outline: #C24127 none 0px;
  }/*.H3_13*/

  .H3_13:after {
    box-sizing: border-box;
    color: #C24127;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 27.7278px / 33.2733px "Fira Sans", sans-serif;
    outline: #C24127 none 0px;
  }/*.H3_13:after*/

  .H3_13:before {
    box-sizing: border-box;
    color: #C24127;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 27.7278px / 33.2733px "Fira Sans", sans-serif;
    outline: #C24127 none 0px;
  }/*.H3_13:before*/

  .P_14 {
    box-sizing: border-box;
    height: 130px;
    letter-spacing: 0.1px;
    width: 508.797px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
    margin: 3.94047px 0px 13.1349px;
  }/*.P_14*/

  .P_14:after {
    box-sizing: border-box;
    letter-spacing: 0.1px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
  }/*.P_14:after*/

  .P_14:before {
    box-sizing: border-box;
    letter-spacing: 0.1px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
  }/*.P_14:before*/

  #DIV_15 {
    bottom: 0px;
    box-shadow: #C24127 7.29643px 7.29643px 0px 0px;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    height: 116.344px;
    left: 0px;
    letter-spacing: 0.1px;
    position: relative;
    right: 0px;
    text-decoration: none solid rgb(255, 255, 255);
    top: 0px;
    width: 501.516px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    background: rgb(15, 52, 147) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(255, 255, 255);
    font: normal normal 500 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    margin: 29.1857px 7.29643px 36.4822px 0px;
    outline: rgb(255, 255, 255) none 0px;
    padding: 29.1857px 40.7031px;
  }/*#DIV_15*/

  #DIV_15:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    letter-spacing: 0.1px;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 500 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    outline: rgb(255, 255, 255) none 0px;
  }/*#DIV_15:after*/

  #DIV_15:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    letter-spacing: 0.1px;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 500 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    outline: rgb(255, 255, 255) none 0px;
  }/*#DIV_15:before*/

  #P_16 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    height: 58px;
    letter-spacing: 0.1px;
    text-decoration: none solid rgb(255, 255, 255);
    width: 420.109px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 500 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    margin: 0px;
    outline: rgb(255, 255, 255) none 0px;
  }/*#P_16*/

  #P_16:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    letter-spacing: 0.1px;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 500 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    outline: rgb(255, 255, 255) none 0px;
  }/*#P_16:after*/

  #P_16:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    letter-spacing: 0.1px;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 500 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    outline: rgb(255, 255, 255) none 0px;
  }/*#P_16:before*/

  #STRONG_17 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    letter-spacing: 0.1px;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_17*/

  #STRONG_17:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    letter-spacing: 0.1px;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_17:after*/

  #STRONG_17:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    letter-spacing: 0.1px;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_17:before*/

  #A_18 {
    box-sizing: border-box;
    color: #C24127;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 700 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    outline: #C24127 none 0px;
    transition: color 0.4s ease 0s;
  }/*#A_18*/

  #A_18:after {
    box-sizing: border-box;
    color: #C24127;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 700 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    outline: #C24127 none 0px;
  }/*#A_18:after*/

  #A_18:before {
    box-sizing: border-box;
    color: #C24127;
    letter-spacing: 0.1px;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 700 normal 14.5929px / 29.1857px "Fira Sans", sans-serif;
    outline: #C24127 none 0px;
  }/*#A_18:before*/

  .P_19 {
    box-sizing: border-box;
    height: 0px;
    letter-spacing: 0.1px;
    width: 508.797px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
    margin: 13.1349px 0px 0px;
  }/*.P_19*/

  .P_19:after {
    box-sizing: border-box;
    letter-spacing: 0.1px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
  }/*.P_19:after*/

  .P_19:before {
    box-sizing: border-box;
    letter-spacing: 0.1px;
    font: normal normal 400 normal 13.1349px / 26.2698px "Fira Sans", sans-serif;
  }/*.P_19:before*/

  #DIV_20 {
    box-sizing: border-box;
    height: 0px;
    width: 508.797px;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#DIV_20*/

  #DIV_20:after {
    box-sizing: border-box;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#DIV_20:after*/

  #DIV_20:before {
    box-sizing: border-box;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#DIV_20:before*/

  #ASIDE_21 {
    box-sizing: border-box;
  }/*#ASIDE_21*/


  #HEADER_22 {
    box-sizing: border-box;
    text-align: center;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    padding: 0px 0px 19.7023px;
  }/*#HEADER_22*/

  #HEADER_22:after {
    box-sizing: border-box;
    text-align: center;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#HEADER_22:after*/

  #HEADER_22:before {
    box-sizing: border-box;
    text-align: center;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
  }/*#HEADER_22:before*/

  #H5_23 {
    box-sizing: border-box;
    color: rgb(36, 36, 36);
    height: 31px;
    text-align: center;
    text-decoration: none solid rgb(36, 36, 36);
    width: 508.797px;
    column-rule-color: rgb(36, 36, 36);
    caret-color: rgb(36, 36, 36);
    border: 0px none rgb(36, 36, 36);
    font: normal normal 700 normal 26.2698px / 31.5238px "Fira Sans", sans-serif;
    margin: 0px;
    outline: rgb(36, 36, 36) none 0px;
  }/*#H5_23*/

  #H5_23:after {
    box-sizing: border-box;
    color: rgb(36, 36, 36);
    text-align: center;
    text-decoration: none solid rgb(36, 36, 36);
    column-rule-color: rgb(36, 36, 36);
    caret-color: rgb(36, 36, 36);
    border: 0px none rgb(36, 36, 36);
    font: normal normal 700 normal 26.2698px / 31.5238px "Fira Sans", sans-serif;
    outline: rgb(36, 36, 36) none 0px;
  }/*#H5_23:after*/

  #H5_23:before {
    box-sizing: border-box;
    color: rgb(36, 36, 36);
    text-align: center;
    text-decoration: none solid rgb(36, 36, 36);
    column-rule-color: rgb(36, 36, 36);
    caret-color: rgb(36, 36, 36);
    border: 0px none rgb(36, 36, 36);
    font: normal normal 700 normal 26.2698px / 31.5238px "Fira Sans", sans-serif;
    outline: rgb(36, 36, 36) none 0px;
  }/*#H5_23:before*/

  #UL_24 {
    bottom: 0px;
    box-sizing: border-box;
    display: flex;
    height: 626.75px;
    left: 0px;
    position: relative;
    right: 0px;
    top: 0px;
    width: 508.797px;
    z-index: 2;
    align-items: stretch;
    justify-content: space-between;
    flex-flow: row wrap;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    margin: 0px;
    padding: 0px;
  }/*#UL_24*/

  #UL_24:after {
    box-sizing: border-box;
    display: block;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
  }/*#UL_24:after*/

  #UL_24:before {
    box-sizing: border-box;
    display: block;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
  }/*#UL_24:before*/

  #LI_25, #LI_29, #LI_33, #LI_49, #LI_53, #LI_57, #LI_61, #LI_65, #LI_69 {
    box-sizing: border-box;
    display: flex;
    height: 160.938px;
    min-height: auto;
    min-width: auto;
    width: 169.594px;
    align-items: stretch;
    flex: 1 1 33.33%;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
  }/*#LI_25, #LI_29, #LI_33, #LI_49, #LI_53, #LI_57, #LI_61, #LI_65, #LI_69*/

  #LI_25:after, #LI_29:after, #LI_33:after, #LI_49:after, #LI_53:after, #LI_57:after, #LI_61:after, #LI_65:after, #LI_69:after {
    box-sizing: border-box;
    display: block;
    min-height: auto;
    min-width: auto;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
  }/*#LI_25:after, #LI_29:after, #LI_33:after, #LI_49:after, #LI_53:after, #LI_57:after, #LI_61:after, #LI_65:after, #LI_69:after*/

  #LI_25:before, #LI_29:before, #LI_33:before, #LI_49:before, #LI_53:before, #LI_57:before, #LI_61:before, #LI_65:before, #LI_69:before {
    box-sizing: border-box;
    display: block;
    min-height: auto;
    min-width: auto;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
  }/*#LI_25:before, #LI_29:before, #LI_33:before, #LI_49:before, #LI_53:before, #LI_57:before, #LI_61:before, #LI_65:before, #LI_69:before*/

  #A_26 {
    box-sizing: border-box;
    color: rgb(213, 213, 213);
    display: flex;
    height: 160.938px;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(213, 213, 213);
    width: 169.594px;
    column-rule-color: rgb(213, 213, 213);
    align-items: center;
    justify-content: center;
    caret-color: rgb(213, 213, 213);
    background: #C24127 none repeat scroll 0% 0% / auto padding-box border-box;
    border: 10.9375px solid rgb(255, 255, 255);
    flex-flow: column nowrap;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(213, 213, 213) none 0px;
    padding: 52.5396px 8.46875px;
    transition: background-color 0.4s ease 0s;
  }/*#A_26*/

  #A_26:after {
    box-sizing: border-box;
    color: rgb(213, 213, 213);
    display: block;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(213, 213, 213);
    column-rule-color: rgb(213, 213, 213);
    caret-color: rgb(213, 213, 213);
    border: 0px none rgb(213, 213, 213);
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(213, 213, 213) none 0px;
  }/*#A_26:after*/

  #A_26:before {
    box-sizing: border-box;
    color: rgb(213, 213, 213);
    display: block;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(213, 213, 213);
    column-rule-color: rgb(213, 213, 213);
    caret-color: rgb(213, 213, 213);
    border: 0px none rgb(213, 213, 213);
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(213, 213, 213) none 0px;
  }/*#A_26:before*/

  #IMG_27 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: rgb(213, 213, 213);
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid rgb(213, 213, 213);
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: rgb(213, 213, 213);
    caret-color: rgb(213, 213, 213);
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/services/plumbing.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none rgb(213, 213, 213);
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(213, 213, 213) none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_27*/

  #IMG_27:after {
    box-sizing: border-box;
    color: rgb(213, 213, 213);
    cursor: pointer;
    text-align: center;
    text-decoration: none solid rgb(213, 213, 213);
    column-rule-color: rgb(213, 213, 213);
    caret-color: rgb(213, 213, 213);
    border: 0px none rgb(213, 213, 213);
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(213, 213, 213) none 0px;
  }/*#IMG_27:after*/

  #IMG_27:before {
    box-sizing: border-box;
    color: rgb(213, 213, 213);
    cursor: pointer;
    text-align: center;
    text-decoration: none solid rgb(213, 213, 213);
    column-rule-color: rgb(213, 213, 213);
    caret-color: rgb(213, 213, 213);
    border: 0px none rgb(213, 213, 213);
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(213, 213, 213) none 0px;
  }/*#IMG_27:before*/

  #STRONG_28 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: block;
    height: 17px;
    max-width: 100%;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    width: 62.5313px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
    transition: color 0.4s ease 0s;
  }/*#STRONG_28*/

  #STRONG_28:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_28:after*/

  #STRONG_28:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_28:before*/

  #A_30, #A_34, #A_50, #A_54, #A_58, #A_62, #A_66, #A_70 {
    box-sizing: border-box;
    color: #C24127;
    display: flex;
    height: 160.938px;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid #C24127;
    width: 169.594px;
    column-rule-color: #C24127;
    align-items: center;
    justify-content: center;
    caret-color: #C24127;
    border: 10.9375px solid rgb(255, 255, 255);
    flex-flow: column nowrap;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    padding: 52.5396px 8.46875px;
    transition: background-color 0.4s ease 0s;
  }/*#A_30, #A_34, #A_50, #A_54, #A_58, #A_62, #A_66, #A_70*/

  #A_30:after, #A_34:after, #A_50:after, #A_54:after, #A_58:after, #A_62:after, #A_66:after, #A_70:after {
    box-sizing: border-box;
    color: #C24127;
    display: block;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#A_30:after, #A_34:after, #A_50:after, #A_54:after, #A_58:after, #A_62:after, #A_66:after, #A_70:after*/

  #A_30:before, #A_34:before, #A_50:before, #A_54:before, #A_58:before, #A_62:before, #A_66:before, #A_70:before {
    box-sizing: border-box;
    color: #C24127;
    display: block;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#A_30:before, #A_34:before, #A_50:before, #A_54:before, #A_58:before, #A_62:before, #A_66:before, #A_70:before*/

  #IMG_31 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid #C24127;
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: #C24127;
    caret-color: #C24127;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/services/boiler-plumbing.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_31*/

  #IMG_31:after {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_31:after*/

  #IMG_31:before {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_31:before*/

  #STRONG_32 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: block;
    height: 17px;
    max-width: 100%;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    width: 105.688px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
    transition: color 0.4s ease 0s;
  }/*#STRONG_32*/

  #STRONG_32:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_32:after*/

  #STRONG_32:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_32:before*/

  #IMG_35 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid #C24127;
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: #C24127;
    caret-color: #C24127;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/services/leak-detection.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_35*/

  #IMG_35:after {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_35:after*/

  #IMG_35:before {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_35:before*/

  #STRONG_36, #STRONG_52, #STRONG_68 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: block;
    height: 34px;
    max-width: 100%;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    width: 130.781px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
    transition: color 0.4s ease 0s;
  }/*#STRONG_36, #STRONG_52, #STRONG_68*/

  #STRONG_36:after, #STRONG_52:after, #STRONG_68:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_36:after, #STRONG_52:after, #STRONG_68:after*/

  #STRONG_36:before, #STRONG_52:before, #STRONG_68:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_36:before, #STRONG_52:before, #STRONG_68:before*/

  #LI_37, #LI_41, #LI_45 {
    box-sizing: border-box;
    display: flex;
    height: 143.938px;
    min-height: auto;
    min-width: auto;
    width: 169.594px;
    align-items: stretch;
    flex: 1 1 33.33%;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
  }/*#LI_37, #LI_41, #LI_45*/

  #LI_37:after, #LI_41:after, #LI_45:after {
    box-sizing: border-box;
    display: block;
    min-height: auto;
    min-width: auto;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
  }/*#LI_37:after, #LI_41:after, #LI_45:after*/

  #LI_37:before, #LI_41:before, #LI_45:before {
    box-sizing: border-box;
    display: block;
    min-height: auto;
    min-width: auto;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
  }/*#LI_37:before, #LI_41:before, #LI_45:before*/

  #A_38, #A_42, #A_46 {
    box-sizing: border-box;
    color: #C24127;
    display: flex;
    height: 143.938px;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid #C24127;
    width: 169.594px;
    column-rule-color: #C24127;
    align-items: center;
    justify-content: center;
    caret-color: #C24127;
    border: 10.9375px solid rgb(255, 255, 255);
    flex-flow: column nowrap;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    padding: 52.5396px 8.46875px;
    transition: background-color 0.4s ease 0s;
  }/*#A_38, #A_42, #A_46*/

  #A_38:after, #A_42:after, #A_46:after {
    box-sizing: border-box;
    color: #C24127;
    display: block;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#A_38:after, #A_42:after, #A_46:after*/

  #A_38:before, #A_42:before, #A_46:before {
    box-sizing: border-box;
    color: #C24127;
    display: block;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#A_38:before, #A_42:before, #A_46:before*/

  #IMG_39 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid #C24127;
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: #C24127;
    caret-color: #C24127;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/services/slab-leak.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_39*/

  #IMG_39:after {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_39:after*/

  #IMG_39:before {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_39:before*/

  #STRONG_40 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: block;
    height: 17px;
    max-width: 100%;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    width: 69.4844px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
    transition: color 0.4s ease 0s;
  }/*#STRONG_40*/

  #STRONG_40:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_40:after*/

  #STRONG_40:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_40:before*/

  #IMG_43 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid #C24127;
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: #C24127;
    caret-color: #C24127;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/services/garbage-disposal.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_43*/

  #IMG_43:after {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_43:after*/

  #IMG_43:before {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_43:before*/

  #STRONG_44 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: block;
    height: 17px;
    max-width: 100%;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    width: 121.328px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
    transition: color 0.4s ease 0s;
  }/*#STRONG_44*/

  #STRONG_44:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_44:after*/

  #STRONG_44:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_44:before*/

  #IMG_47 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid #C24127;
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: #C24127;
    caret-color: #C24127;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/services/water-heater.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_47*/

  #IMG_47:after {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_47:after*/

  #IMG_47:before {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_47:before*/

  #STRONG_48 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: block;
    height: 17px;
    max-width: 100%;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    width: 92.9531px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
    transition: color 0.4s ease 0s;
  }/*#STRONG_48*/

  #STRONG_48:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_48:after*/

  #STRONG_48:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_48:before*/

  #IMG_51 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid #C24127;
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: #C24127;
    caret-color: #C24127;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/water-damage.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_51*/

  #IMG_51:after {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_51:after*/

  #IMG_51:before {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_51:before*/

  #IMG_55 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid #C24127;
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: #C24127;
    caret-color: #C24127;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/hydro-jetting.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_55*/

  #IMG_55:after {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_55:after*/

  #IMG_55:before {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_55:before*/

  #STRONG_56 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: block;
    height: 17px;
    max-width: 100%;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    width: 86.5469px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
    transition: color 0.4s ease 0s;
  }/*#STRONG_56*/

  #STRONG_56:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_56:after*/

  #STRONG_56:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_56:before*/

  #IMG_59 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid #C24127;
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: #C24127;
    caret-color: #C24127;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/drain-cleaning.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_59*/

  #IMG_59:after {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_59:after*/

  #IMG_59:before {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_59:before*/

  #STRONG_60 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: block;
    height: 17px;
    max-width: 100%;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    width: 95.7656px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
    transition: color 0.4s ease 0s;
  }/*#STRONG_60*/

  #STRONG_60:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_60:after*/

  #STRONG_60:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_60:before*/

  #IMG_63 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid #C24127;
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: #C24127;
    caret-color: #C24127;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/sewer-services.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_63*/

  #IMG_63:after {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_63:after*/

  #IMG_63:before {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_63:before*/

  #STRONG_64 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: block;
    height: 17px;
    max-width: 100%;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    width: 98.0938px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
    transition: color 0.4s ease 0s;
  }/*#STRONG_64*/

  #STRONG_64:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_64:after*/

  #STRONG_64:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_64:before*/

  #IMG_67 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid #C24127;
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: #C24127;
    caret-color: #C24127;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/trenchless.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_67*/

  #IMG_67:after {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_67:after*/

  #IMG_67:before {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_67:before*/

  #IMG_71 {
    background-position: 50% 50%;
    bottom: 0px;
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    display: block;
    height: 626.75px;
    left: 0px;
    max-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    text-decoration: none solid #C24127;
    top: 0px;
    width: 508.797px;
    z-index: -2;
    column-rule-color: #C24127;
    caret-color: #C24127;
    background: rgba(0, 0, 0, 0) url("https://www.ez-plumbing.com/images/septic-repair.jpg") no-repeat scroll 50% 50% / cover padding-box border-box;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
    transition: opacity 0.4s ease 0s;
  }/*#IMG_71*/

  #IMG_71:after {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_71:after*/

  #IMG_71:before {
    box-sizing: border-box;
    color: #C24127;
    cursor: pointer;
    text-align: center;
    text-decoration: none solid #C24127;
    column-rule-color: #C24127;
    caret-color: #C24127;
    border: 0px none #C24127;
    font: normal normal 400 normal 13.1349px / 21.0158px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: #C24127 none 0px;
  }/*#IMG_71:before*/

  #STRONG_72 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: block;
    height: 17px;
    max-width: 100%;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    width: 94.1563px;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
    transition: color 0.4s ease 0s;
  }/*#STRONG_72*/

  #STRONG_72:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_72:after*/

  #STRONG_72:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    min-height: auto;
    min-width: auto;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 14.5929px / 17.5114px "Fira Sans", sans-serif;
    list-style: none outside none;
    outline: rgb(255, 255, 255) none 0px;
  }/*#STRONG_72:before*/



</style>
