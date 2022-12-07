<template>
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
                            <input type="text" name="title" class="form-control" placeholder="Type Location Here..."
                                v-model="location.title">
                            <small class="text-danger" v-if="errors.title"> {{errors.title }}</small>
                        </div>

                        <!------ working_hours ------->
                        <div class="form-group">
                            <label for="working_hours">
                                <i class="mdi mdi-alarm"></i>
                                Working Hours
                            </label>
                            <input type="text" name="working_hours" class="form-control"
                                placeholder="Type Working Hours Here..." v-model="location.working_hours">
                                <small class="text-danger" v-if="errors.working_hours"> {{errors.working_hours }}</small>
                        </div>

                        <!------ Street View ------->
                        <div class="form-group">
                            <label for="street_view">
                                <i class="mdi mdi-eye"></i>
                                Street View
                            </label>
                            <input type="text" name="street_view" class="form-control"
                                placeholder="Type Street View Here..." v-model="location.street_view">
                                <small class="text-danger" v-if="errors.street_view"> {{errors.street_view }}</small>
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>

                    </form>
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
            location: {
                title: null,
                working_hours: null,
                street_view: null,
            },
        }
    },
    methods: {
        storeLocation() {
            this.$inertia.post('/admin/location', this.location)
        },
    },
}
</script>
