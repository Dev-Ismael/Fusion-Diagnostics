
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'

/*======= ckeditor5 =======*/
import CKEditor from '@ckeditor/ckeditor5-vue';

// Import Inertia Component
import { Link, Head} from '@inertiajs/inertia-vue3'

// Import Local Component
import Pagination from './components/pagination.vue'
import admin_navbar from "../js/components/admin_navbar.vue";
import admin_sidebar from "../js/components/admin_sidebar.vue";

createInertiaApp({
    resolve: async (name) => {
        const pages = import.meta.glob('./Pages/**/*.vue');

        return (await pages[`./Pages/${name}.vue`]()).default;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(CKEditor)    // Use CkEditor
            .component('Link', Link)
            .component('Head', Head)
            .component('Pagination', Pagination)
            .component('admin_navbar', admin_navbar)
            .component('admin_sidebar', admin_sidebar)
            .mount(el)
    },
});


