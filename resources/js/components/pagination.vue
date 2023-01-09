<template>
    <div v-if="links.length > 3">
        <ul id="pagination">
            <template v-for="(link, p) in links" :key="p">
                <div v-if="link.url === null" class="d-none"
                v-html="link.label" />
                <li v-else>
                    <Link
                        class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500"
                        :class="{ 'bg-blue-700 text-white active': link.active }" :href="link.url" v-html="link.label">
                    </Link>
                </li>
            </template>
        </ul>
    </div>
</template>
<style>
    #wrapper {
        margin: 0 auto;
        display: block;
        width: 960px;
    }

    .page-header {
        text-align: center;
        font-size: 1.5em;
        font-weight: normal;
        border-bottom: 1px solid #ddd;
        margin: 30px 0
    }

    #pagination {
        margin: 0;
        padding: 0;
        text-align: center
    }

    #pagination li {
        display: inline;
        border: none !important;
    }

    #pagination li a {
        display: inline-block;
        text-decoration: none;
        padding: 5px 10px !important;
        color: #000
    }

    /* Active and Hoverable Pagination */
    #pagination li a {
        border-radius: 5px !important;
        -webkit-transition: background-color 0.3s;
        transition: background-color 0.3s;
        border: none !important;

    }

    #pagination li a.active {
        background-color: #0e6dcd;
        color: #fff;
        border: 1px solid #0e6dcd !important;
    }

    #pagination li a:hover:not(.active) {
        background-color: #ddd;
    }

    /* border-pagination */
    .b-pagination-outer {
        width: 100%;
        margin: 0 auto;
        text-align: center;
        overflow: hidden;
        display: flex
    }

    #border-pagination {
        margin: 0 auto;
        padding: 0;
        text-align: center
    }

    #border-pagination li {
        display: inline;

    }

    #border-pagination li a {
        display: block;
        text-decoration: none;
        color: #000;
        padding: 5px 10px;
        border: 1px solid #ddd;
        float: left;

    }

    #border-pagination li a {
        -webkit-transition: background-color 0.4s;
        transition: background-color 0.4s
    }

    #border-pagination li a.active {
        background-color: #0e6dcd;
        color: #fff;
    }

    #border-pagination li a:hover:not(.active) {
        background: #ddd;
    }
</style>
<script>
    import { Link } from '@inertiajs/inertia-vue3'
    export default {
        components: {
            Link,
        },
        props: {
            links: Array
        },
    }
</script>
