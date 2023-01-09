<template>

    <Head title=" Admin Panel | Services" />

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
                                    <h4 class="card-title mb-5">Show Service</h4>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                Service title
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ service.title }} </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-brands fa-searchengin"></i>
                                                SEO Title
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ service.seo.title }} </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-brands fa-searchengin"></i>
                                                SEO Description
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ service.seo.description }} </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-brands fa-searchengin"></i>
                                                SEO Keywords
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ service.seo.keywords }} </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="mdi mdi-format-align-left"></i>
                                                Summary
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ service.summary }} </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="mdi mdi-format-align-left"></i>
                                                Content
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p v-html="service.content"></p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="mdi mdi-file-image"></i>
                                                icon
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> <img :src="'/storage/images/services/' + service.icon" class="rounded"
                                                    alt="service-img" width="160"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="mdi mdi-file-image"></i>
                                                Image
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> <img :src="'/storage/images/services/' + service.img" class="rounded"
                                                    alt="service-img" width="160"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <!------ Buttons ------->
                                            <Link href="/admin/service" class="btn btn-primary d-block">Back</Link>
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
        service: Object,
    },
}

</script>
