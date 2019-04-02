const pkg = require('./package')

module.exports = {
  mode: 'universal',

  /*
  ** Headers of the page
  */
  head: {
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: pkg.description }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#fff' },

  /*
  ** Global CSS
  */
  css: [
    "@/assets/css/global.css",
  ],

  /*
  ** Plugins to load before mounting the App
  */
  plugins: [
  ],

  /*
  ** Nuxt.js modules
  */
  modules: [
    // Doc: https://github.com/nuxt-community/axios-module#usage
    '@nuxtjs/axios',
    ['@nuxtjs/pwa', { icon: false }],
    "nuxt-imagemin",
    "@nuxtjs/component-cache",
    '@nuxtjs/sitemap',
  ],
  manifest: {
    name: "Rooter Inc",
    short_name: "Rooter",
    description: pkg.description,
    theme_color: "#C24127"
  },
  render: {
    http2: {
      push: true
    },
    static: {
      maxAge: "1y",
      setHeaders(res, path) {
        if (path.includes("sw.js")) {
          res.setHeader("Cache-Control", `public, max-age=${15 * 60}`)
        }
      }
    }
  },
  /*
  ** Axios module configuration
  */
  axios: {
    // See https://github.com/nuxt-community/axios-module#options
  },
  // oauth: {
  //   sessionName: 'ghi-session',
  //   secretKey: process.env.SECRET_KEY,
  //   oauthHost: process.env.OAUTH_HOST,
  //   oauthClientID: process.env.OAUTH_CLIENT_ID,
  //   oauthClientSecret: process.env.OAUTH_CLIENT_SECRET,
  //   onLogout: (req, res) => {
  //     // do something after logging out
  //   },
  //   fetchUser: (accessToken, request) => {
  //     // do something to return the user
  //     const user = User.findByToken(accessToken, request)
  //     return user
  //   }
  // },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** You can extend webpack config here
    */
    extend(config, ctx) {

    }
  },
  sitemap: {
    path: '/sitemap.xml',
    hostname: 'https://rooter-inc.com',
    cacheTime: 1000 * 60 * 15,
    gzip: true,
    generate: true, // Enable me when using nuxt generate
    exclude: [
      '/secret',
      '/admin/**'
    ],
  },
}
