import "../css/app.css";
import "./bootstrap";

import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { createApp, h } from "vue";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        // pages.default.layout = pages.default.layout || CommonLayout
        return pages[`./Pages/${name}.vue`];
    },
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mount(el);
    },
});
