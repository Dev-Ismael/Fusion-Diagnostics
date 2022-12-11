<template>

    <Head title=" Admin Panel | Locations" />
    <div class="row grid-margin">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Show Location</h4>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="ti-location-pin"></i>
                                Location
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ location.title }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-alarm"></i>
                                Working Hours
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ location.working_hours }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="card-title">
                                <i class="mdi mdi-eye"></i>
                                Street View
                            </label>
                        </div>
                        <div class="col-lg-8">
                            <p> {{ location.street_view }} </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <!------ Buttons ------->
                            <Link href="/admin/location"  class="btn btn-primary d-block">Back</Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>

import { Link } from '@inertiajs/inertia-vue3'
export default {
    components: {
        Link,
    },
    props: {
        location: Object,
    },
}

</script>
