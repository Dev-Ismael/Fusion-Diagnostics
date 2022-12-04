<template>

    <Head title=" Admin Panel | Locations" />
    <div v-for="location in locations" :key="location.id">
        <Link :href="`/locations/${location.id}`">
        {{ location.title }}
        </Link>
        <div>{{ location.working_hours }}</div>
    </div>
</template>
<script>
import { Link, Head } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link,
        Head,
    },
    props: {
        locations: Array,
    },
}
</script>
