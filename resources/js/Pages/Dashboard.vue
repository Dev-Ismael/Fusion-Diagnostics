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


                    <div class="card">
                        <div class="card-body">

                            <div class="main-content">
                                <div class="header bg-gradient-primary pb-5 pt-5 pt-md-8">
                                    <div class="container-fluid">
                                        <h2 class="mb-5 text-white"> Dashboard </h2>
                                        <div class="header-body">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-6 mt-3">
                                                    <div class="card card-stats mb-4 mb-xl-0">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h3 class="card-title text-uppercase text-muted mb-0 pb-4">Services</h3>
                                                                    <span class="h2 font-weight-bold mb-0">{{ statistics.services }}</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="icon icon-shape bg-danger shadow p-2">
                                                                        <i class="mdi mdi-tune"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 mt-3">
                                                    <div class="card card-stats mb-4 mb-xl-0">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h3 class="card-title text-uppercase text-muted mb-0 pb-4 mb-0">Tests</h3>
                                                                    <span class="h2 font-weight-bold mb-0">{{ statistics.tests }}</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="icon icon-shape bg-yellow  shadow p-2">
                                                                        <i class="mdi mdi-test-tube"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 mt-3">
                                                    <div class="card card-stats mb-4 mb-xl-0">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h3 class="card-title text-uppercase text-muted mb-0 pb-4 mb-0">Locations</h3>
                                                                    <span class="h2 font-weight-bold mb-0">{{ statistics.locations }}</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="icon icon-shape bg-info  shadow p-2">
                                                                        <i class="mdi mdi-google-maps"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 mt-3">
                                                    <div class="card card-stats mb-4 mb-xl-0">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h3 class="card-title text-uppercase text-muted mb-0 pb-4 mb-0">Messeges</h3>
                                                                    <span class="h2 font-weight-bold mb-0">{{ statistics.messeges }}</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="icon icon-shape bg-warning shadow p-2">
                                                                        <i class="mdi mdi-message-text-outline"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 mt-3">
                                                    <div class="card card-stats mb-4 mb-xl-0">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h3 class="card-title text-uppercase text-muted mb-0 pb-4 mb-0">Testimonials</h3>
                                                                    <span class="h2 font-weight-bold mb-0">{{ statistics.testimonials }}</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="icon icon-shape bg-info shadow p-2">
                                                                        <i class="mdi mdi-comment-check"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 mt-3">
                                                    <div class="card card-stats mb-4 mb-xl-0">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h3 class="card-title text-uppercase text-muted mb-0 pb-4 mb-0">Subscribers</h3>
                                                                    <span class="h2 font-weight-bold mb-0">{{ statistics.subscribers }}</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="icon icon-shape bg-danger shadow p-2">
                                                                        <i class="mdi mdi-human-greeting"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-6 mt-3">
                                                    <div class="card card-stats mb-4 mb-xl-0">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h3 class="card-title text-uppercase text-muted mb-0 pb-4 mb-0">Newsletter</h3>
                                                                    <span class="h2 font-weight-bold mb-0">{{ statistics.newsletter }}</span>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="icon icon-shape shadow p-2">
                                                                        <i class="mdi mdi-email-open"></i>
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
                                <!-- Page content -->
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
        statistics: Object
    },
}

</script>
