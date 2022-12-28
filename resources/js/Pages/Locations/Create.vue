<template>

    <Head title=" Admin Panel | Locations" />


    <div class="container-scroller">
        <admin_navbar></admin_navbar>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <admin_sidebar></admin_sidebar>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Create form</h4>
                                    <p class="card-description">
                                        Add new branch Location
                                    </p>
                                    <form class="forms-sample" @submit.prevent="storeLocation()">

                                        <!------ Title ------->
                                        <div class="form-group">
                                            <label for="title">
                                                <i class="ti-location-pin"></i>
                                                Location
                                            </label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Type Location Here..." v-model="form.title"
                                                :class="errors.title ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.title"> {{ errors.title }}</small>
                                        </div>

                                        <!------ working_hours ------->
                                        <div class="form-group">
                                            <label for="working_hours">
                                                <i class="mdi mdi-alarm"></i>
                                                Working Hours
                                            </label>
                                            <input type="text" name="working_hours" class="form-control"
                                                placeholder="Type Working Hours Here..." v-model="form.working_hours"
                                                :class="errors.working_hours ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.working_hours">
                                                {{ errors.working_hours }}</small>
                                        </div>

                                        <!------ location_map ------->
                                        <div class="form-group">
                                            <label for="location_map">
                                                <i class="mdi mdi-alarm"></i>
                                                Location Map
                                            </label>
                                            <input type="text" name="location_map" class="form-control"
                                                placeholder="Type Location Link Here..." v-model="form.location_map"
                                                :class="errors.location_map ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.location_map">
                                                {{ errors.location_map }}</small>
                                        </div>

                                        <!------ Street View ------->
                                        <div class="form-group">
                                            <label for="street_view">
                                                <i class="mdi mdi-eye"></i>
                                                Street View
                                            </label>
                                            <input type="text" name="street_view" class="form-control"
                                                placeholder="Type Street View Here..." v-model="form.street_view"
                                                :class="errors.street_view ? 'border-danger' : ''">
                                            <small class="text-danger" v-if="errors.street_view"> {{ errors.street_view
                                            }}</small>
                                        </div>

                                        <!------ Buttons ------->
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <Link href="/admin/location" class="btn btn-light">Cancel</Link>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>




export default {
    props: {
        errors: Object,
    },
    data() {
        return {
            form: {
                title: null,
                location_map: null,
                working_hours: null,
                street_view: null,
            },
        }
    },
    methods: {
        storeLocation() {
            this.$inertia.post('/admin/location', this.form);
        }
    },
}
</script>
