<template>
    <Head title=" Admin Panel | Locations" />
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Edit form</h4>
                    <p class="card-description"> Update this branch Location </p>
                    <form class="forms-sample" @submit.prevent="updateLocation()">

                        <!------ Title ------->
                        <div class="form-group">
                            <label for="title">
                                <i class="ti-location-pin"></i>
                                Location
                            </label>
                            <input type="text" name="title" class="form-control" placeholder="Type Location Here..."
                                v-model="location.title" :class=" errors.title ? 'border-danger' : ''  "
                            >
                            <small class="text-danger" v-if="errors.title"> {{errors.title }}</small>
                        </div>

                        <!------ working_hours ------->
                        <div class="form-group">
                            <label for="working_hours">
                                <i class="mdi mdi-alarm"></i>
                                Working Hours
                            </label>
                            <input type="text" name="working_hours" class="form-control"
                                placeholder="Type Working Hours Here..." v-model="location.working_hours" :class=" errors.working_hours ? 'border-danger' : ''  " >
                                <small class="text-danger" v-if="errors.working_hours"> {{errors.working_hours }}</small>
                        </div>

                        <!------ Street View ------->
                        <div class="form-group">
                            <label for="street_view">
                                <i class="mdi mdi-eye"></i>
                                Street View
                            </label>
                            <input type="text" name="street_view" class="form-control"
                                placeholder="Type Street View Here..." v-model="location.street_view" :class=" errors.street_view ? 'border-danger' : ''  " >
                                <small class="text-danger" v-if="errors.street_view"> {{errors.street_view }}</small>
                        </div>

                        <!------ Buttons ------->
                        <button type="submit" class="btn btn-primary me-2">Save</button>
                        <Link href="/admin/location"  class="btn btn-light">Cancel</Link>

                    </form>
                </div>
            </div>
        </div>
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
            errors: Object,
            location: Object,
        },
        methods: {
            updateLocation() {
                this.$inertia.put('/admin/location/' + this.location.id, this.location);
            }
        },
    }

</script>
