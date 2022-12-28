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
                                                Location Map
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <a :href="location.location_map" target="_blank"> Click Here </a>
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
                                            <a :href="location.street_view" target="_blank"> Click Here </a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <!------ Buttons ------->
                                            <Link href="/admin/location" class="btn btn-primary d-block">Back</Link>
                                        </div>
                                    </div>
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
        location: Object,
    },
}

</script>
