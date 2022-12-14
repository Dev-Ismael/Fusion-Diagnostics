
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'

/*======= ckeditor5 =======*/
import CKEditor from '@ckeditor/ckeditor5-vue';


createInertiaApp({
    resolve: async (name) => {
        const pages = import.meta.glob('./Pages/**/*.vue');

        return (await pages[`./Pages/${name}.vue`]()).default;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(CKEditor)  //  Use CkEditor
            .mount(el)
    },
});

