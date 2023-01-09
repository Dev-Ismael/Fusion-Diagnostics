<template>

    <Head title=" Admin Panel | Testimonials" />
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
                                    <h4 class="card-title mb-5">Show Testimonial</h4>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="card-title">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                Client name
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <p> {{ testimonial.name }} </p>
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
                                            <p v-html="testimonial.content"></p>
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
                                            <p> <img :src="'/storage/images/testimonials/' + testimonial.img"
                                                    alt="testimonial-img" width="160"> </p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <!------ Buttons ------->
                                            <Link href="/admin/testimonial" class="btn btn-primary d-block">Back</Link>
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
        testimonial: Object,
    },
}

</script>
