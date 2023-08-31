import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from './Layouts/MainLayout.vue'
import { ZiggyVue } from 'ziggy'
import '../css/app.css'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faUserSecret)

createInertiaApp({
  
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page = pages[`./Pages/${name}.vue`]
    page.default.layout = name.startsWith('Public/') ? undefined : MainLayout
    return page
  },
  setup({ el, App, props, plugin ,library}) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .use(library)
      .component('FontAwesomeIcon',FontAwesomeIcon)
      .mount(el)
  },
})