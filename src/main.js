import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
//import vuetify from "./plugins/vuetify";
//import { loadFonts } from "./plugins/webfontloader";

import BaseCard from "./components/ui/BaseCard.vue";
import BaseButton from "./components/ui/BaseButton.vue";
import BaseBadge from "./components/ui/BaseBadge.vue";
import BaseSpinner from "./components/ui/BaseSpinner.vue";
import BaseDialog from "./components/ui/BaseDialog.vue";

import { plugin, defaultConfig } from "@formkit/vue";
import "@formkit/themes/genesis";

import 'vuetify/styles' // Global CSS has to be imported
import { createVuetify } from 'vuetify';
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import "./css/TopicPageLayout.css";

const vuetify = createVuetify({
  components,
  directives,
})


//loadFonts();

const app = createApp(App);

app.use(vuetify);
app.use(router);
app.use(store);
app.use(plugin, defaultConfig);


app.component("base-card", BaseCard);
app.component("base-button", BaseButton);
app.component("base-badge", BaseBadge);
app.component("base-spinner", BaseSpinner);
app.component("base-dialog", BaseDialog);

app.mount("#app");
